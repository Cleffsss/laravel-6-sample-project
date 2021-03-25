<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionnaire;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
  public function create(Questionnaire $questionnaire)
  {
    // dd('hello');
    return view('question.create', compact('questionnaire'));
  }
  // public function create2(Request $request, $paulo)
  // {
  //   $anita = $paulo/10;
  //   $solar = Questionnaire::find($anita);
  //   dd($solar);
  //   return view('question.create', compact('questionnaire'));
  // }

  public function store(Questionnaire $questionnaire)
  {
    // dd(request()->all());

    $data = request()->validate([
      'question.question' =>'required',
      'answers.*.answer' =>'required',

    ]);

    $question = $questionnaire->questions()->create($data['question']);
    $question ->answers()->createMany($data['answers']);

    return redirect('/questionnaires/'.$questionnaire->id);
  }
}