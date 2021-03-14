<?php

use App\Http\Controllers\AuthController;
use App\Models\Classe;
use App\Models\Mark;
use App\Models\Participant;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use Tymon\JWTAuth\Claims\Subject;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('jwt.auth')->group(function () {


    // Classes
    // Voir les classes
    Route::get('/classes', function () {
        return Classe::all();
    });
    // Voir une classe par ID
    Route::get('/classes/{classeId}', function ($classeId) {
        return Classe::findOrFail($classeId);
    });
    // Créer des classes 
    Route::post('/classes', function (Request $request) {
        return Classe::create($request->all());
    });
    // Editer une classe par ID
    Route::put('/classes/{classeId}', function ($classeId, Request $request) {
        $classe = Classe::findOrFail($classeId);
        $classe->update($request->all());
        return $classe;
    });


    // Students
    // Voir les étudiants
    Route::get('/students', function () {
        return Classe::all();
    });
    // Voir les étudiants d'une classe par ID
    Route::get('/students/{classeId}', function ($studentId) {
        return Classe::findOrFail($studentId);
    });

    // Créer des étudiants 
    Route::post('/students', function (Request $request) {
        return Student::create($request->all());
    });
    // Editer un étudiant par ID
    Route::put('/students/{studentId}', function ($studentId, Request $request) {
        $student = Student::findOrFail($studentId);
        $student->update($request->all());
        return $student;
    });
    // Supprimer un étudiant  
    Route::delete('/students/{studentId}', function ($studentId) {
        return Student::findOrFail($studentId)->delete();
    });

    // Intervenant
    // Voir les intervenants
    Route::get('/participants', function () {
        return Participant::all();
    });
    // Créer des intervenants 
    Route::post('/participants', function (Request $request) {
        return Participant::create($request->all());
    });
    // Editer un intervenant par ID
    Route::put('/participants/{participantId}', function ($participantId, Request $request) {
        $participant = Participant::findOrFail($participantId);
        $participant->update($request->all());
        return $participant;
    });

    // Matiere
    // Voir les Matieres
    Route::get('/subjects', function () {
        return Subject::all();
    });
    // Créer des Matieres 
    Route::post('/subjects', function (Request $request) {
        return Subject::create($request->all());
    });
    // Editer une matiere par ID
    Route::put('/subjects/{subjectId}', function ($subjectId, Request $request) {
        $subject = Subject::findOrFail($subjectId);
        $subject->update($request->all());
        return $subject;
    });


    // Marks
    // Voir l'ensemble des notes
    Route::get('/marks', function () {
        return Mark::all();
    });

    // Voir la liste des notes d'un étudiant par étudiant 
    Route::get('/marks/student_id/{id}', function ($studentId) {
        return Mark::findOrFail($studentId);
    });
});

Route::group([
    'middleware' => 'api',
    'prefix'     => 'auth',
], function () {
    Route::post('login', [AuthController::class, 'login']);
});
