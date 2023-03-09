@extends('Employer.Layout.header')

@section('content')
<div class="box-content">
    <div class="box-heading">
      <div class="box-title"> 
        <h3 class="mb-35">Post an Internship</h3>
      </div>
      <div class="box-breadcrumb"> 
        <div class="breadcrumbs">
          <ul> 
            <li> <a class="icon-home" href="/employer-job-post">Ads</a></li>
            <li><span>Internship</span></li>
            <li><span>Post an Intership</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row"> 
      <div class="col-lg-12">
        <div class="section-box">
          <div class="container"> 
            <div class="panel-white mb-30">
              <div class="box-padding bg-postjob">
                <h5 class="icon-edu">Tell us about the role</h5>
                <div class="row mt-30">
                  <div class="col-lg-9">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group mb-30"> 
                          <label class="font-sm color-text-mutted mb-10">Internship title *</label>
                          <input class="form-control" type="text" placeholder="e.g. Senior Product Designer">
                        </div>
                      </div>
                    
                      <div class="col-lg-12"> 
                        <div class="form-group mb-30"> 
                          <label class="font-sm color-text-mutted mb-10">Add internship description *</label>
                          <textarea class="form-control" name="message" rows="8" placeholder=" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at sem id enim suscipit commodo nec in ante. Sed viverra vel leo vitae pharetra. Morbi viverra venenatis neque, eu porttitor diam blandit nec. Etiam et volutpat magna, id molestie quam. Vestibulum vel libero gravida, scelerisque arcu eu, maximus mi. Suspendisse eu dolor lobortis, posuere enim venenatis, posuere quam.

                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at sem id enim suscipit commodo nec in ante. Sed viverra vel leo vitae pharetra. Morbi viverra venenatis neque, eu porttitor diam blandit nec. Etiam et volutpat magna, id molestie quam. Vestibulum vel libero gravida, scelerisque arcu eu, maximus mi. Suspendisse eu dolor lobortis, posuere enim venenatis, posuere quam."></textarea>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30"> 
                          <label class="font-sm color-text-mutted mb-10">Internship location *</label>
                          <input class="form-control" type="text" placeholder="e.g. &quot;Lipa City &quot; or &quot;Tanauan City”">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Course/Track *</label>
                          <select class="form-input mr-10 select-active ">
                            <option value="">Choose Course/Track</option>
                            @if(count($course_track)>0)
                            @foreach ($course_track as $item=>$ct)
                            <option value="{{$ct->id}}">{{$ct->course_track_name}}</option>
                            @endforeach
                            
                            @endif
                           
                         
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Soft Skills (3 Max)*</label>
                          <div class="col-lg-12 col-md-12" id="softlist">

                          </div>
                          
                          <select onChange="addSoftSkill()" class="form-input mr-10 select-active" id="softskill">
                           
                            @if(count($softskills)>0)
                              @foreach ($softskills as $item=>$soft)
                                <option class="softoptions" value="{{$soft->id}}" id="soft{{$soft->id}}">{{$soft->skill_name}}</option>
                              @endforeach
                            @endif
                          </select>
                          
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Technical Skills (3 Max)*</label>
                          <div class="col-lg-12 col-md-12" id="techlist">

                          </div>
                          
                          <select onChange="addTechSkill()" class="form-input mr-10 select-active" id="techskill">
                           
                            @if(count($techskills)>0)
                              @foreach ($techskills as $item=>$tech)
                                <option class="techoptions" value="{{$tech->id}}" id="tech{{$tech->id}}">{{$tech->skill_name}}</option>
                              @endforeach
                            @endif
                          </select>
                          
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Industry Specific Skills (3 Max)*</label>
                          <div class="col-lg-12 col-md-12" id="industrylist">

                          </div>
                          
                          <select onChange="addIndustrySkill()" class="form-input mr-10 select-active" id="industryskill">
                           
                            @if(count($industryskills)>0)
                              @foreach ($industryskills as $item=>$industry)
                                <option class="industryoptions" value="{{$industry->id}}" id="industry{{$industry->id}}">{{$industry->skill_name}}</option>
                              @endforeach
                            @endif
                          </select>
                          
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Workplace type *</label>
                          <select class="form-control">
                            <option value="1">Remote</option>
                            <option value="1">Office</option>
                          </select>
                        </div>
                      </div>
                     
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Job Type *</label>
                          <select class="form-control">
                            <option value="1">Intern</option>
                            <option value="1">Full Time</option>
                            <option value="1">Part Time</option>
                          </select>
                          
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Salary (optional)</label>
                          <input class="form-control" type="text" placeholder="Php. 20,000">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Tags (optional) </label>
                          <input class="form-control" type="text" placeholder="UI/UX, Marketing...">
                        </div>
                      </div>
                      {{-- <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <div class="box-upload">
                            <div class="add-file-upload">
                              <input class="fileupload" type="file" name="file">
                            </div><a class="btn btn-default">Upload File</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30 box-file-uploaded d-flex align-items-center"><span>Job_required.pdf</span><a class="btn btn-delete">Delete</a></div>
                      </div> --}}
                      <div class="col-lg-12"> 
                        <div class="form-group mt-10">
                          <button class="btn btn-default btn-brand icon-tick">Post New Job</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
   
  </div>
  <script>
    const softskill = document.querySelector('#softskill');
    const softlist = document.querySelector('#softlist');
    const softs = [];
    const techskill = document.querySelector('#techskill');
    const techlist = document.querySelector('#techlist');
    const techs = [];
    const industryskill = document.querySelector('#industryskill');
    const industrylist = document.querySelector('#industrylist');
    const industry = [];
   function addSoftSkill(){
      let id=(softskill.options[softskill.selectedIndex].id).replace('soft','');
      let skill=softskill.options[softskill.selectedIndex].text;
      const skills={
        'id':id,
        'skill':skill
      }
      let x=0;
      if(softs.length<3){
       for(let i=0;i<softs.length;i++){
          if(softs[i].id==id){
           x++;
          }
       }
       if(x>0){
        alert(`Soft skill is already in the list.`);
       }else{
        softs.push(skills);
        const span=document.createElement('SPAN');
        span.setAttribute('class','btn btn-grey-small bg-warning text-white mr-5');
        span.innerText=skills.skill;
        softlist.append(span);
        const input = document.createElement('INPUT');
        input.setAttribute('type','hidden');
        input.setAttribute('name','softskills[]');
        input.setAttribute('value',id);
        softlist.append(input);
        // <span class="btn btn-grey-small mr-5">Building and Maintaining Relationship</span>
       }
      }else{
        alert(`You can only allow to add a maximum of 3 soft skills per ads`);
      }
     
     
   }

   function addTechSkill(){
      let id=(techskill.options[techskill.selectedIndex].id).replace('tech','');
      let skill=techskill.options[techskill.selectedIndex].text;
    
      const skills={
        'id':id,
        'skill':skill
      }
      let x=0;
      if(techs.length<3){
       for(let i=0;i<techs.length;i++){
          if(techs[i].id==id){
           x++;
          }
       }
       if(x>0){
        alert(`Tech skill is already in the list.`);
       }else{
        techs.push(skills);
        const span=document.createElement('SPAN');
        span.setAttribute('class','btn btn-grey-small bg-warning text-white mr-5');
        span.innerText=skills.skill;
        techlist.append(span);
        const input = document.createElement('INPUT');
        input.setAttribute('type','hidden');
        input.setAttribute('name','techskills[]');
        input.setAttribute('value',id);
        techlist.append(input);
        // <span class="btn btn-grey-small mr-5">Building and Maintaining Relationship</span>
       }
      }else{
        alert(`You can only allow to add a maximum of 3 tech skills per ads`);
      }
     
     
   }

   function addIndustrySkill(){
      let id=(industryskill.options[industryskill.selectedIndex].id).replace('industry','');
      let skill=industryskill.options[industryskill.selectedIndex].text;
      const skills={
        'id':id,
        'skill':skill
      }
      let x=0;
      if(industry.length<3){
       for(let i=0;i<industry.length;i++){
          if(industry[i].id==id){
           x++;
          }
       }
       if(x>0){
        alert(`Industry specific skill is already in the list.`);
       }else{
        industry.push(skills);
        const span=document.createElement('SPAN');
        span.setAttribute('class','btn btn-grey-small bg-warning text-white mr-5');
        span.innerText=skills.skill;
        industrylist.append(span);
        const input = document.createElement('INPUT');
        input.setAttribute('type','hidden');
        input.setAttribute('name','industryskills[]');
        input.setAttribute('value',id);
        industrylist.append(input);
        // <span class="btn btn-grey-small mr-5">Building and Maintaining Relationship</span>
       }
      }else{
        alert(`You can only allow to add a maximum of 3 industry specific skills per ads`);
      }
     
     
   }
   
  
  </script>
@endsection