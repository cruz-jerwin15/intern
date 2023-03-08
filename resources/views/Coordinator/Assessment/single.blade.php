@extends('Coordinator.Layout.header')
@section('content')
<div class="box-content">
    <div class="box-heading">
      <div class="box-title"> 
        <h3 class="mb-35">{{$assessment->assessment_name}}</h3>
      </div>
      <div class="box-breadcrumb"> 
        <div class="breadcrumbs">
          <ul> 
            <li> <a class="icon-home" href="#">Assessment</a></li>
            <li><span>My Assessment</span></li>
            <li><span>{{$assessment->assessment_name}}</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row"> 
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-end">
                <a href="#createModal" class="btn btn-primary" data-bs-toggle="modal"><i class="fa-solid fa-plus"></i> <span> Add Section</span></a>
                {{-- Create Class Modal --}}
                <!-- Modal -->
                    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create Section</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="text-start mt-10" action={{ route('coordinator_section_quest.store') }} method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="modal-body">
                             <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mb-10"> 
                                          <label class="font-sm color-text-mutted mb-10">Section Title*</label>
                                          <input class="form-control" type="text" name="section_title" placeholder="Technical Skills" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mb-10"> 

                                            <input type="hidden" name="process" value="SECTION">
                                            <input type="hidden" name="assessment_id" value="{{$assessment->id}}">
                                            <label class="font-sm color-text-mutted mb-10">Section Instruction *</label>
                                            <textarea class="form-control" rows="10" name="section_instruction" placeholder="Enter instruction here..." required></textarea>
                                         
                                        </div>
                                    </div>
                                </div>
                             </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
            </div>
            <div class="card-body">
                @include('Message.index')
               <div class="container-fluid">
                <div class="row">
                    @if(count($assessment->topics)>0)
                    @php
                        $count=0;
                    @endphp
                        @foreach ($assessment->topics as $item=>$topic)
                        @if($topic->status=="active")
                        @php
                        $count++;
                    @endphp
                        <table class="my-3">
                            <thead>
                                <tr>
                                    <th class="d-flex justify-content-between">
                                        <h5>{{$count}}).{{$topic->topic_name}}</h5>
                                        <span>
                                            <a href="#updateModal{{$topic->id}}"  data-bs-toggle="modal" style="width:3em;" class="btn btn-warning btn-sm px-2 py-2"><i class="fa-solid fa-pencil"></i></a>
                                            <a href="#createQuestModal{{$topic->id}}"  data-bs-toggle="modal" style="width:3em;" class="btn btn-primary btn-sm px-2 py-2"><i class="fa-solid fa-plus"></i></a>
                                            <a href="#removeModal{{$topic->id}}"  data-bs-toggle="modal" style="width:3em;" class="btn btn-danger btn-sm px-2 py-2"><i class="fa-solid fa-trash"></i></a>
                                        </span>

                                        {{-- Modal STart --}}
                                          <!-- add QUestModal -->
                    <div class="modal fade" id="createQuestModal{{$topic->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create Question</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="text-start mt-10" action={{ route('coordinator_section_quest.store') }} method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="modal-body">
                             <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mb-10"> 
                                          <label class="font-sm color-text-mutted mb-10">Question *</label>
                                          <input class="form-control" type="text" name="question" placeholder="Enter question here..." required>
                                          <input type="hidden" name="process" value="QUESTION">
                                          <input type="hidden" name="assessment_id" value="{{$assessment->id}}">
                                          <input type="hidden" name="topic_id" value="{{$topic->id}}">
                                       
                                        </div>
                                    </div>
                                   
                                </div>
                             </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                                        {{-- Update Topic --}}
                                        <div class="modal fade" id="updateModal{{$topic->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update Section</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form method="POST" action="{{ route('coordinator_section_quest.update', $topic->id) }}" enctype="multipart/form-data" > 
                                                    @method('PUT')
                                                    @csrf
                                                <div class="modal-body">
                                                 <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group mb-10"> 
                                                               
                                                              <label class="font-sm color-text-mutted mb-10">Section Title*</label>
                                                              <input class="form-control" type="text" value="{{$topic->topic_name}}" name="section_title" placeholder="Technical Skills" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group mb-10"> 
                    
                                                                <input type="hidden" name="process" value="SECTION">
                                                                <input type="hidden" name="assessment_id" value="{{$assessment->id}}">
                                                                <label class="font-sm color-text-mutted mb-10">Section Instruction *</label>
                                                                <textarea class="form-control" rows="10" name="section_instruction" placeholder="Enter instruction here..." required>{{$topic->topic_instruction}}</textarea>
                                                             
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>

                                         {{-- Remove Modal --}}
                                     <div class="modal fade" id="removeModal{{$topic->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Remove Section</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-dark fs-6">Click 'Remove' if you want to remove this section.</p>
                                            </div>
                                          
                                            <form action={{ route('update_status.store') }} method="POST" enctype="multipart/form-data">
                                                @csrf
                                            <div class="modal-footer">
                                                <input type="hidden" value="{{$topic->id}}" name="statusid">
                                                <input type="hidden" value="{{$assessment->id}}" name="classid">
                                                <input type="hidden" value="REMOVETOPIC" name="process">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Remove</button>
                                            </div>
                                            </form>
                                        </div>
                                        </div>
                                    </div>

                                   
                                        {{-- Modal End --}}
                                        
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($topic->questions)>0)
                                @php
                                 $count1=0;
                                @endphp
                                    @foreach ($topic->questions as $item=>$question)
                                    @if($question->status=="active")
                                    @php
                                    $count1++;
                                   @endphp
                                        <tr >
                                            <td class="d-flex justify-content-around my-1">
                                                <p class="fs-6">{{$count1}}.) {{$question->quest}}</p>
                                                <p>&nbsp;</p>
                                                <span>
                                                    <a href="#updateQuestModal{{$question->id}}"  data-bs-toggle="modal" style="width:2.5em;" class="btn btn-warning btn-sm px-2 py-2"><i class="fa-solid fa-pencil"></i></a>
                                                    <a href="#removeQuestModal{{$question->id}}"  data-bs-toggle="modal" style="width:2.5em;" class="btn btn-danger btn-sm px-2 py-2"><i class="fa-solid fa-trash"></i></a>
                                                </span>

                                                     <!-- update QUestModal -->
                    <div class="modal fade" id="updateQuestModal{{$question->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Question</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{ route('coordinator_section_quest.update', $question->id) }}" enctype="multipart/form-data" > 
                                @method('PUT')
                                @csrf
                            <div class="modal-body">
                             <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mb-10"> 
                                          <label class="font-sm color-text-mutted mb-10">Question *</label>
                                          <input class="form-control" type="text" value="{{$question->quest}}" name="question" placeholder="Enter question here..." required>
                                          <input type="hidden" name="process" value="QUESTION">
                                          <input type="hidden" name="assessment_id" value="{{$assessment->id}}">
                                       
                                        </div>
                                    </div>
                                   
                                </div>
                             </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>

                    
                                         {{-- Remove Modal --}}
                                         <div class="modal fade" id="removeQuestModal{{$question->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Remove Question</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-dark fs-6">Click 'Remove' if you want to remove this question.</p>
                                                </div>
                                              
                                                <form action={{ route('update_status.store') }} method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-footer">
                                                    <input type="hidden" value="{{$question->id}}" name="statusid">
                                                    <input type="hidden" value="{{$assessment->id}}" name="classid">
                                                    <input type="hidden" value="REMOVEQUESTION" name="process">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Remove</button>
                                                </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
    
                                            </td>
                                        </tr>
                                    @endif
                                   
                                    @endforeach
                                @endif
                              
                            </tbody>
                        </table>
                        <hr>
                        @endif
                       
                           
                        @endforeach
                    @endif
                   
                </div>
               </div>
            </div>
        </div>
    </div>
   
  </div>

@endsection