<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
		protected $guarded =[];

		public function questionnaire()
		{
			# code...
			return $this->belongsTo(Questionnaire::class);
		}

		public function responses()
		{
			# code...
			return $this->hasMany(SurveyResponse::class);
		}
}
