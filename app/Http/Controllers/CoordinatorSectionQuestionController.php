<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Question;
class CoordinatorSectionQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $process = $request->input('process');
        $assessment_id = $request->input('assessment_id');
        if($process=="SECTION"){
            $this->validate($request, [
                'section_title' => 'required',
                'section_instruction' => 'required',
            ]);
            $section_title = $request->input('section_title');
            $section_instruction = $request->input('section_instruction');
            $topics = Topic::where('assessment_id',$assessment_id)->where('topic_name',$section_title)->get();

            if(count($topics)<=0){
                $section = new Topic;
                $section->assessment_id =$assessment_id;
                $section->topic_name=$section_title;
                $section->topic_instruction=$section_instruction;
                $section->status='active';
                $section->save();
                $path = "/coordinator_assessment/".$assessment_id;
                return redirect($path)->with('success', 'Successfully created a section!');
            }else{
                $path = "/coordinator_assessment/".$assessment_id;
                return redirect($path)->with('error', 'Section already existing in this assessment!');
            }

        }else{
            $this->validate($request, [
                'question' => 'required',
                'assessment_id' => 'required',
                'topic_id' => 'required',
            ]);

            $quest = $request->input('question');
            $topic_id = $request->input('topic_id');
            $question = new Question;
            $question->topic_id=$topic_id;
            $question->quest=$quest;
            $question->status='active';
            $question->save();
            $path = "/coordinator_assessment/".$assessment_id;
            return redirect($path)->with('success', 'A question is successfully created.');
        }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $process = $request->input('process');
        $assessment_id = $request->input('assessment_id');
        if($process=="SECTION"){
            $this->validate($request, [
                'section_title' => 'required',
                'section_instruction' => 'required',
            ]);
            $section_title = $request->input('section_title');
            $section_instruction = $request->input('section_instruction');
            $topics = Topic::where('assessment_id',$assessment_id)->where('topic_name',$section_title)->get();

            if(count($topics)<=0){
                $section = Topic::where('id',$id)->first();
                $section->topic_name=$section_title;
                $section->topic_instruction=$section_instruction;
                $section->save();
                $path = "/coordinator_assessment/".$assessment_id;
                return redirect($path)->with('success', 'Successfully updated a section!');
            }else{
                $sects = Topic::where('id',$id)->where('assessment_id',$assessment_id)->where('topic_name',$section_title)->get();
                if(count($sects)>0){
                    $section = Topic::where('id',$id)->first();
                    $section->topic_name=$section_title;
                    $section->topic_instruction=$section_instruction;
                    $section->save();
                    $path = "/coordinator_assessment/".$assessment_id;
                    return redirect($path)->with('success', 'Successfully updated a section!');
                }
                $path = "/coordinator_assessment/".$assessment_id;
                return redirect($path)->with('error', 'Section already existing in this assessment!');
            }

        }else{
            $this->validate($request, [
                'question' => 'required',
            ]);
            $quest = $request->input('question');
            $question = Question::where('id',$id)->first();
            $question->quest=$quest;
            $question->save();
            $path = "/coordinator_assessment/".$assessment_id;
            return redirect($path)->with('success', 'Successfully updated a question!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
