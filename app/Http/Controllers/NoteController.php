<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Card;
use Illuminate\Support\Facades\DB;



class NoteController extends Controller
{
    public function show($id){
    	return Note::find($id);
    }
    public function index(){
    	$notes=DB::table('notes')->get();
    	return view('welcome',compact('notes'));
    }
    public function card_show($id){
    	$card=Card::find($id);
    	return view('card_show',compact('card'));

    }
    public function index_card(){
    	$cards=DB::table('cards')->get();
    	return view('cards',compact('cards'));
    }

    public function store(Request $rq, Card $card,$id){
    	//return request()->all();
    	$this->validate($rq,
    		['body'=>'required|min:6']// rouls
    	);
    	$note=new Note;
    	$note->body=$rq->body;
    	$card= Card::find($id);
    	$card->notes()->save($note);
    	flash('created note', 'level');
    	return back();
    }
    public function edit(Note $note){
    	return view('note',compact('note'));
    }
    public function update(Note $note, Request $request ){

    	$note->update($request->all());
    	return back();
    }
}
