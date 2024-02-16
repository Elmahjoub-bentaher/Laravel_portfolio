<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\MyDetails;
// use App\Models\Language;
// use App\Models\Skill;
use App\Models\Education;
// use App\Models\AcademicCertificates;
// use App\Models\Project;
use App\Models\WorkExp;
// use App\Models\Portfolio;
// use App\Models\Reference;
use Illuminate\Support\Facades\DB;

class mainController extends Controller
{
    public function index() {

        // $detail = MyDetails::first();
        // $langues = Language::all();
        // $skills = Skill::all();
        $educations = Education::all();
        // $certificates = AcademicCertificates::all();
        // $projects = Project::all();
        $works = WorkExp::all();
        // $images = Portfolio::all();
        // $references = Reference::all();

        $detail = DB::table('my_details')->first();
        $langues = DB::table('languages')->get();
        $skills = DB::table('skills')->get();
        $projects = DB::table('projects')->get();
        $certificates = DB::table('academic_certificates')->get();
        $images = DB::table('portfolios')->get();
        $references = DB::table('references')->get();
        $skillDs = DB::table('skill_and_descriptions')->get();

        return view('main',compact(
            'detail',
            'langues',
            'skills',
            'educations',
            'certificates',
            'projects',
            'works',
            'images',
            'references',
            'skillDs'
        ));
    }
}
