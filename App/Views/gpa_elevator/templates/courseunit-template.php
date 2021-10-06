{% extends "gpa_elevator/templates/index.php" %}

{% block title %}
    <title>  {% block col_title %} {% endblock %}-{% block uni_title %}MUK {% endblock %}University| Gpa Elevator</title>
{% endblock %}

{% block  nav %}
<div class="container-fluid" id="universitynamebox">
  <h3><b> {% block university_name %}MAKERERE UNIVERSITY {% endblock %}</b></h3>
</div>
{%  endblock %}


{% block content %}
<div class="container" id="body-content">
    <div class="row text-center ">
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" id="lecture_notes">
           <div class="lecture-notes-section">
               <span><strong><h3 class="title2">LECTURE NOTES</h3></strong></span>
           <div class="lecture-notes-box">
                      <ul >
                    {% block lectureNotice %}
                        <li class="lecture-notes"><b><i><a href="#">{% block pdf_icon %}<i class="pdf far fa-file-pdf"></i> {% endblock %}Lecture 1 </a></i></b></li> 
                        <li class="lecture-notes"><b><i><a href="#">{{ block('pdf_icon') }}Lecture 2 </a></i></b></li> 
                        <li class="lecture-notes"><b><i><a href="#">{{ block('pdf_icon') }}Lecture 3 </a></i></b></li> 
                        <li class="lecture-notes"><b><i><a href="#">{{ block('pdf_icon') }}Lecture 4 </a></i></b></li> 
                        <li class="lecture-notes"><b><i><a href="#">{{ block('pdf_icon') }}Lecture 5 </a></i></b></li> 
                        <li class="lecture-notes"><b><i><a href="#">{{ block('pdf_icon') }}Lecture 6 </a></i></b></li> 
                        <li class="lecture-notes"><b><i><a href="#">{{ block('pdf_icon') }}Lecture 7 </a></i></b></li> 
                        <li class="lecture-notes"><b><i><a href="#">{{ block('pdf_icon') }}Lecture 8 </a></i></b></li> 
                        <li class="lecture-notes"><b><i><a href="#">{{ block('pdf_icon') }}Lecture 9 </a></i></b></li> 
                        <li class="lecture-notes"><b><i><a href="#">{{ block('pdf_icon') }}Lecture 10 </a></i></b></li> 
                        {% endblock lectureNotice %}
                    {% block extra_lecture_notes %}
                        <div class="more_lecture_notes" id="more_lecture_notes_wrapper">
                        {% block hidden_lecture_notes %}
                        <li class="lecture-notes"><b><i><a href="#">{{ block('pdf_icon') }}Lecture 11</a></i></b></li> 
                        <li class="lecture-notes"><b><i><a href="#">{{ block('pdf_icon') }}Lecture 12</a></i></b></li> 
                        <li class="lecture-notes"><b><i><a href="#">{{ block('pdf_icon') }}Lecture 13</a></i></b></li> 
                        <li class="lecture-notes"><b><i><a href="#">{{ block('pdf_icon') }}Lecture 14</a></i></b></li> 
                        {% endblock %}
                        </div>

                    <div class="load-more-section" id="more_lectures">
                      <input type="checkbox" class="checkbox toggle_more_lecture_notes-checkbox" id="toggle_more_lecture_notes" autocomplete="off" >
                      <label for="toggle_more_lecture_notes" class="toggle_more_lecture_notes" >
                          <i id="toggle_more_lecture_notes" title="click to see more Lecture Notes from previous years"  class="toggle_more_content-open">Load More...</i>
                          <i  id="toggle_more_lecture_notes" title="click to see less" class="toggle_more_content-close" >View less..</i>
                      </label>
                    </div>
                {% endblock %}
                        <h4 class ="ref_textbks">Reference Textbooks</h4>
                    {% block ref_textbks %}
                        {% block ref_textbk_1 %}<li class="lecture-notes"><b><i>{% block ref_textbk_1_link %}<a href="../../pdf/computer eng/year1/sem2/CMP1203-architecture/Fundamentals-of-Computer-Organization-and-Architecture.pdf">{% endblock %}{% block bk_icon %}<i class="bk-icon fas fa-book reference-icon"></i>{% endblock %}{% block ref_textbk_1_title %}Fundamentals-of-Computer-Organization-and-Architecture{% endblock %} </a></i></b></li>{% endblock %}
                        {% block ref_textbk_2 %}<li class="lecture-notes"><b><i>{% block ref_textbk_2_link %}<a href="../../pdf/computer eng/year1/sem2/CMP1203-architecture/Linda Null and Julia Lobur-The Essentials of Computer Organization and Architecture-Jones & Bartlett.pdf">{% endblock %}{{ block('bk_icon') }}{% block ref_textbk_2_title %}Linda Null and Julia Lobur-The Essentials of Computer Organization and Architecture-Jones & Bartlett{% endblock %}</a></i></b></li>{% endblock %}
                        {% block ref_textbk_3 %}<li class="lecture-notes"><b><i>{% block ref_textbk_3_link %}<a href="../../pdf/computer eng/year1/sem2/CMP1203-architecture/Linda Null and Julia Lobur-The Essentials of Computer Organization and Architecture-Jones & Bartlett.pdf">{% endblock %}{{ block('bk_icon') }}{% block ref_textbk_3_title %}Linda Null and Julia Lobur-The Essentials of Computer Organization and Architecture-Jones & Bartlett{% endblock %}</a></i></b></li>{% endblock %}
                        {% block ref_textbk_4 %}<li class="lecture-notes"><b><i>{% block ref_textbk_4_link %}<a href="../../pdf/computer eng/year1/sem2/CMP1203-architecture/Linda Null and Julia Lobur-The Essentials of Computer Organization and Architecture-Jones & Bartlett.pdf">{% endblock %}{{ block('bk_icon') }}{% block ref_textbk_4_title %}Linda Null and Julia Lobur-The Essentials of Computer Organization and Architecture-Jones & Bartlett{% endblock %}</a></i></b></li>{% endblock %}
                        {% block ref_textbk_5 %}<li class="lecture-notes"><b><i>{% block ref_textbk_5_link %}<a href="../../pdf/computer eng/year1/sem2/CMP1203-architecture/Linda Null and Julia Lobur-The Essentials of Computer Organization and Architecture-Jones & Bartlett.pdf">{% endblock %}{{ block('bk_icon') }}{% block ref_textbk_5_title %}Linda Null and Julia Lobur-The Essentials of Computer Organization and Architecture-Jones & Bartlett{% endblock %}</a></i></b></li>{% endblock %}
                        {% block ref_textbk_6 %}<li class="lecture-notes"><b><i>{% block ref_textbk_6_link %}<a href="../../pdf/computer eng/year1/sem2/CMP1203-architecture/Linda Null and Julia Lobur-The Essentials of Computer Organization and Architecture-Jones & Bartlett.pdf">{% endblock %}{{ block('bk_icon') }}{% block ref_textbk_6_title %}Linda Null and Julia Lobur-The Essentials of Computer Organization and Architecture-Jones & Bartlett{% endblock %}</a></i></b></li>{% endblock %}
                    {% endblock ref_textbks %}
                    </ul>
           </div>
            </div>
    </div>
      
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" id="pastpaper_display_area">
      <div class="pastpaper_display_area">
              <strong><h1 class="col-name">{% block col_name %} CEDAT {% endblock col_name %}</h1></strong>
              <h4 class="courseName"><b> {% block courseName %} Bachelor of Science In Computer Engineering {% endblock %}</b> </h4>
            <strong><h3 class="courseunit_name">{% block courseunit %} CMP1203:COMPUTER ORGANIZATION & ARCHITECTURE {% endblock courseunit %}</h3></strong>
            <hr class="horizontal-rule">
            <div class="pastpaper_display_area_inner">
              <ul class="pastpapers_list">
             {% block std_year_1 %}  
                <li>
                      <h4 class ="academic-yr"><b>YEAR 2019/2020</b></h4>
                             <ul>
                            {% block exam_list_1 %}
                            <li class="pastpaper"><b><i>{% block paper_1_2019_link %}<a href="http://localhost/Home/error">{% endblock %}{% block coursecode %}CMP1203{% endblock %}-Continous Assessment Test I</a></i></b></li>
                            <li class="pastpaper"><b><i>{% block paper_2_2019_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Continous Assessment Test II</a></i></b></li>
                            <li class="pastpaper"><b><i>{% block paper_3_2019_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Final Semester Exam</a></i></b></li>
                            {% endblock exam_list_1 %}
                            </ul>
                </li>
            {% endblock std_year_1 %}
            {% block std_year_2 %} 
                <li>
                   <h4 class ="academic-yr"><b>YEAR 2018/2019</b></h4>
                           <ul>
                            {% block exam_list_2 %}
                            <li class="pastpaper"><b><i>{% block paper_1_2018_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Continous Assessment Test I</a></i></b></li>
                            <li class="pastpaper"><b><i>{% block paper_2_2018_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Continous Assessment Test II</a></i></b></li>
                            <li class="pastpaper"><b><i>{% block paper_3_2018_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Final Semester Exam</a></i></b></li>
                           {% endblock exam_list_2 %}
                            </ul>
                </li>
            {% endblock std_year_2 %}
            {% block std_year_3 %} 
                <li>
                <h4 class ="academic-yr"><b>YEAR 2017/2018</b></h4>
                             <ul> 
                            {% block exam_list_3 %}
                            <li class="pastpaper"><b><i>{% block paper_1_2017_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Continous Assessment Test I</a></i></b></li>
                            <li class="pastpaper"><b><i>{% block paper_2_2017_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Continous Assessment Test II</a></i></b></li>
                            <li class="pastpaper"><b><i>{% block paper_3_2017_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Final Semester Exam</a></i></b></li>
                           {% endblock exam_list_3 %}
                            </ul>
                </li>
            {% endblock std_year_3 %}
                     <div class="toggle_more_years"  id="more_years-wrapper">
                        {% block std_year_4 %} 
                        <li>
                    <h4 class ="academic-yr"><b>YEAR 2016/2017</b></h4>
                                 <ul>
                                {% block exam_list_4 %}
                                   <li class="pastpaper"><b><i>{% block paper_1_2016_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Continous Assessment Test I</a></i></b></li>
                                   <li class="pastpaper"><b><i>{% block paper_2_2016_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Continous Assessment Test II</a></i></b></li>
                                   <li class="pastpaper"><b><i>{% block paper_3_2016_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Final Semester Exam</a></i></b></li>
                                {% endblock exam_list_4 %} 
                                </ul>
                         </li>
                        {% endblock std_year_4 %}
                        {% block std_year_5 %} 
                         <li>
                     <h4 class ="academic-yr"><b>YEAR 2015/2016</b></h4>
                                  <ul>
                                {% block exam_list_5 %}
                                    <li class="pastpaper"><b><i>{% block paper_1_2015_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Continous Assessment Test I</a></i></b></li>
                                    <li class="pastpaper"><b><i>{% block paper_2_2015_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Continous Assessment Test II</a></i></b></li>
                                    <li class="pastpaper"><b><i>{% block paper_3_2015_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Final Semester Exam</a></i></b></li>
                                {% endblock exam_list_5 %}
                                </ul>
                          </li>
                        {% endblock std_year_5 %}
                        {% block std_year_6 %} 
                          <li>
                              <h4 class ="academic-yr"><b>YEAR 2014/2015</b></h4>
                                           <ul>
                                            {% block exam_list_6 %}
                                             <li class="pastpaper"><b><i>{% block paper_1_2014_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Continous Assessment Test I</a></i></b></li>
                                             <li class="pastpaper"><b><i>{% block paper_2_2014_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Continous Assessment Test II</a></i></b></li>
                                             <li class="pastpaper"><b><i>{% block paper_3_2014_link %}<a href="http://localhost/Home/error">{% endblock %}{{ block('coursecode') }}-Final Semester Exam</a></i></b></li>
                                          {% endblock exam_list_6 %}
                                          <i id="b4_2014">Papers Before 2014</i>
                                          {% block papers_before_14 %}
                                          <li class="pastpaper"><b><i>{% block paper_1_2013_link %}<a href="http://localhost/Home/error">{% endblock %}Examination Questions</a></i></b></li>
                                          {% endblock %}
                                            </ul>
                          </li>
                        {% endblock std_year_6 %}
                     </div>
                </ul>
            </div>

              <div class="load-more-section" >
                  <input type="checkbox" class="checkbox toggle_more_years-checkbox" id="toggle_more_years" autocomplete="off" >
                  <label for="toggle_more_years" class="toggle_more_years_button">
                      <i id="toggle_more_years" title="click to see more papers from previous years"  class="toggle_more_content-open">Load More...</i>
                      <i  id="toggle_more_years" title="click to see less" class="toggle_more_content-close" >View less..</i>
                  </label>   
                </div>
                <div class="row links_to_other_courseunits">
                  <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6 col-xl-6"> 
                      {% block courseunit_link_1 %}<a href="ELE1202" id="other_course_unit-linkbutton" class="link-item btn--pink">ELE1202-Elec.& Mag. {% endblock courseunit_link_1 %} <i class="fas fa-caret-right"></i><i class="fas fa-caret-right"></i></a>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6 col-xl-6"> 
                    {% block courseunit_link_2 %}<a href="EMT1201" class="link-item btn--pink" id="other_course_unit-linkbutton">EMT1201-Eng.Math II {% endblock courseunit_link_2 %} <i class="fas fa-caret-right"></i><i class="fas fa-caret-right"></i></a>
                  </div>
                </div>
      </div>
    </div>
    <!--paper section ends here-->
    
    <!--lecture notes-pg-2-->
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 other_hyperlinks" id="other_hyperlinks">
        <div class="youtube-links">
    
           <h5 class="pop"><i class="youtube fas fa-video"></i> Links to YouTube Videos</h5>
           <ul>
            {% block youtube_links %}
             <li> <a href="#">Virtual Memory</a></li>
             <li><a href="#">Error correction</a></li>
             <li><a href="#">Computer architecture</a></li>
             <li><a href="#">RAID</a></li>
             <li><a href="#">Parity Bits</a></li>
             <li><a href="#">Marie Arch</a></li>
             <li><a href="#">Numbering Systems</a></li>
            {% endblock youtube_links %}
           </ul>
          
        </div>
        <div class="vid_link"> <a href= "#" class="btn btn-suggest">Suggest Video Link</a></div>
        <div class="comparisonSection">
            <h4 class="comparisonSection__title">COMPARE QUESTIONS WITH</h4>
            {% block comparison_link_1 %}<a href="#" id="comparisonSection__buttons" class="btn btn--orange">Kyambogo University</a> {% endblock comparison_link_1 %}
            {% block comparison_link_2 %}<a href="#" class="btn btn--green" id="comparisonSection__buttons">Mbarara University</a> {% endblock comparison_link_2 %}
            {% block comparison_link_3 %}<a href="#" class="btn btn--blue" id="comparisonSection__buttons">Ndejje University</a> {% endblock comparison_link_3 %}
            {% block comparison_link_4 %}<a href="#" class="btn btn--gray" id="comparisonSection__buttons">Nkumba University</a> {% endblock comparison_link_4 %}
            {% block comparison_link_5 %}<a href="#" id="comparisonSection__buttons" class="btn btn-sm btn--pink">Mutesa I Royal university</a> {% endblock comparison_link_5 %}
            {% block comparison_link_6 %}<a href="#" class="btn btn--lightgreen" id="comparisonSection__buttons">Kampala University</a><br> {% endblock comparison_link_6 %}
            {% block comparison_link_7 %}<a href="#" class="btn btn--tertiary" id="comparisonSection__buttons">Bugema University</a> {% endblock comparison_link_7 %}
        </div>
    </div>
    </div>
    
    <!--paper section ------------>
  

    <!--Questins section-->
    
    <!---QUESTION SECTION  SIDE-BAR LEFT STARTS HERE-->
    <div class="container-fluid" id="questionSection">
      <h1>QUESTION SECTION</h1>
    </div>
    <div class="row question_section">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 questionSection__ask" >
      <div  id="questionSection__ask">
        <div class="questionSection-welcome_massage">
        <h4><b>YOU NEED HELP?</b></h4>
        <hr class="questionSection-welcome_massage-rule">
        <h6>Don't endlessly surf the internet for an answer,You can ask any questions in this particular course unit here and let your fellow students answer it for you shortly.</h6>
      </div>
      </div>
      <div class="row">
        <div class="col-12">
          <h2 class= "h4 text-white bg-info mb-2 p-2 rounded ">Ask a question</h2>
        </div>
      </div>
      <form  class="mb-3" action="#" method="get">
        <div class="form-group ">
          <label for="topic">Topic:</label>
          <input type="text" class="form-control" name="qn_topic" id="topic" placeholder="Give your topic a title." required>
        </div>
        <div class="form-group ">
          <label for="question">Ask your question:</label>
          <textarea class="form-control" placeholder="Type your question here." id="questions" rows="5" required>
          </textarea>
      
        </div>
        <div class="input-group ">
            <div class="input-group-prepend">
              <span class="input-group-text" id="file_upload">Upload file</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="custom-user-file-reactions" onchange="readURL(this);" accept="/image">
              <label class="custom-file-label" for="inputGroupFile01"></label>
            </div>
        </div>
    
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" id="checkbox"  value="notification">
            Notify me upon replies.
          </label>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 questionSection__ask-btns">
          <div class="submit">
              <button type="submit"  id="button-send">Submit</button>
              <div class="ease"></div>
          </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 questionSection__ask-btns" >
              <div class="submit">
                <button type="reset" value="Reset" id="button-reset">Reset</button>
                <div class="ease-reset"></div>
              </div>
          </div>
        </div>
      </form>
      
      </div>
      
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" id="trending_Q&A">
        <div class="question_display_area">
            <h2 class= "row h4 text-white bg-info mb-2 p-2 rounded-top Trending_questions_title">Trending questions</h2>
      {% block qn_1 %}
     
      <div class="row studentsquestion studentsquestion-01"> 
        <div class="students_profile_pictures">{% block qn_1_std_1_profile_pic %} <a href="www.gpaelevator.com/nansambaracheal/"> <img id="students_profile_picture" src="../../img/racheal.jpg" alt=""></a> <a class="student_name" href="http://">NANSAMBA RACHEAL </a>  {% endblock qn_1_std_1_profile_pic %}
          <div class="date_time_posted"><i>{% block qn_1_std_1_date_posted %} Posted On 12/09/2019  12:00PM {% endblock qn_1_std_1_date_posted %}</i> </div>
        </div> 
        <div class="question_box">
            <h5> <i><span class="studentsquestion_topic">Topic: </span>{% block qn_1_topic %} Computer hardware{% endblock qn_1_topic %}</h5></i> 
           <p class="mb-0">{% block qn_1_paragraph %} please help me with reference on what i should focus on because hardware is too much and exams are next week{% endblock %}</p>
        </div>
       
      {% block qn_1_rxns %}
        <div class="container-fluid">
          <div class="row users_reactions">
          {% block qn_1_rxn_like %}
            <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
              <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.1" autocomplete="off" >
              <label for="reactions_trigger-01.1" class="toggle_content_label reactions_trigger-label"> 
              <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                <i class="far fa-thumbs-up "></i> Like({% block like_num %}413 {% endblock %})</span>
              </label>
            </span> 
          {% endblock %} 
          {% block qn_1_rxn_ans %}
            <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 answers users_views" id=""> 
              <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.2" autocomplete="off" >
              <label for="reactions_trigger-01.2" class="toggle_more_years_button toggle_content_label reactions_trigger-label"> 
              <span class="users_views_active users_views_reactions" id="toggle_answers_trigger">
                  <i class="fas fa-pen-alt "></i> Answer({% block qn_1_ans_num %}20 {% endblock %})</span>
              </label>
              
            </span> 
          {% endblock %}  
          {% block qn_1_rxn_interest %}
            <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views"> 
                <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.3" autocomplete="off" >
                <label for="reactions_trigger-01.3" class="toggle_content_label reactions_trigger-label"> 
                <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                   Interested({% block interest_num %}10 {% endblock %}) </span>
                </label>
            </span>  
          {% endblock %}
          {% block qn_1_rxn_share %}
            <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle"> <i class="fas fa-share "></i>  Share
            </span> 
          {% endblock %}  
       </div>
  
  
       <div class="toggle_answers"  id="students_answer_wrapper">
         <div class="answer_section">
           {% block qn_1_ans_1 %}
            <div class="row studentsanswers  students_reply-01">
                <div class="students_profile_pictures">{% block qn_1_std_2_profile_pic %} <a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/ssemugenyi-isaac.jpg" alt=""></a> <a class="student_name" href="http://">Ssemugenyi Isaac</a>  {% endblock %}
                  <div class="date_time_posted"><i>{% block qn_1_std_2_date_posted %} 1week ago{% endblock %}</i> </div> 
                </div> 
                <div class="question_box">
                  <p class="mb-0">{% block qn_1_ans_1_paragraph %}Just read the network hardware devices more and little of the general hardware.{% endblock %}</p>
                 </div>
  
                
                 <div class="container-fluid">
                  <div class="row Answer_users_reactions">
                    {% block qn_1_ans_1_agree %}
                      <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                        <input type="radio" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.4"  >
                        <label for="reactions_trigger-01.4" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                            <i class="far fa-thumbs-up "></i>Agree( {% block qn_1_ans_1_agree_num %} 5 {% endblock %}) </span>
                        </label>
                      </span> 
                    {% endblock %}
                    {% block qn_1_ans_1_disagree %}
                      <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                          <input type="radio" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.5" >
                          <label for="reactions_trigger-01.5" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions " id="reaction_box_disagree">
                              <i class="far fa-thumbs-down "></i>Disagree( {% block qn_1_ans_1_disagree_num %}1 {% endblock %})</span>
                          </label>
                        </span>
                    {% endblock %}
                    {% block qn_1_ans_1_rxn %}
                    <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views users_views_on_answered reactions"> 
                      <input type="checkbox" class="toggle_content_checkbox reactions_trigger-button" id="reactions_trigger-01.6" autocomplete="off" >
                      <label for="reactions_trigger-01.6" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_box">Reactions( {% block qn_1_ans_1_rxn_num %}13 {% endblock %})</span>
                      </label>
                    </span>
                  {% endblock %}
                  {% block qn_1_ans_1_share %}
                  <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share
            
                  </span>
                  {% endblock %}
                   
               </div>
          <section class="Reaction_Section">
            
            <div id="reaction_box" class="reactions_wrapper content_box_hidden_before_toggle" > 
              <div class="container-fluid reactions_title-box">Reactions</div>
               
                 {% block qn_1_ans_1_rxn_1 %}
                <div class="container-fluid studentsanswers studentsquestion-excluding-1  student_reactions_on_trending_qns">
                  <div class="students_profile_pictures students_profile_pictures-reactions">{% block qn_1_std_3_profile_pic %}<a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/mox.jpg" alt=""></a> <a class="student_name" href="http://">Kimera Moxhus</a> {% endblock %}
                    <div class="date_time_posted"><i>{% block qn_1_std_3_date_posted %}12hours ago {% endblock %}</i> </div> 
                  </div>
                  <div class="question_box">
                    <p class="mb-0">{% block qn_1_ans_1_rxn_1_paragraph %} Mwana this is poison she needs to read all at least to have an idea of each of the hardware we had this Semester{% endblock %}</p>
                  </div>
                    <div class="row  student_views_on_reactions_about_trending_qns">
                      <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                        <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.7" autocomplete="off" >
                        <label for="reactions_trigger-01.7" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                          <i class="far fa-thumbs-up "></i>Agree({% block qn_1_ans_1_rxn_1_agree_num %}5 {% endblock %})  </span>
                        </label> 
                      </span>   
                      <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                        <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.8" autocomplete="off" >
                        <label for="reactions_trigger-01.8" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                          <i class="far fa-thumbs-down "></i>  Disagree({% block qn_1_ans_1_rxn_1_disagree_num %}1 {% endblock %}) </span>
                        </label> 
                      </span>
                      <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share
            
                      </span>   
                    </div>
                   
                </div>
                {% endblock %}

              {% block qn_1_ans_1_rxn_2 %}
                 <div class="container-fluid studentsanswers studentsquestion-excluding-1  student_reactions_on_trending_qns">
         
                   <div class="students_profile_pictures students_profile_pictures-reactions">{% block qn_1_std_4_profile_pic %} <a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/isaac.jpg" alt=""></a> <a class="student_name" href="http://">Mubiru Isaac</a> {% endblock %}
                    <div class="date_time_posted"><i>{% block qn_1_std_4_date_posted %}2minutes ago {% endblock %}</i> </div> 
                   </div>
                   <div class="question_box">
                     <p class="mb-0">{% block qn_1_ans_1_rxn_2_paragraph %}Me i would advise you to do whatever you can to read everything before you enter the paper to avoid disappointments</p>{% endblock %}
                   </div>
                     <div class="row  student_views_on_reactions_about_trending_qns">
                        <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.9" autocomplete="off" >
                          <label for="reactions_trigger-01.9" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                            <i class="far fa-thumbs-up "></i>Agree({% block qn_1_ans_1_rxn_2_agree_num %}1000 {% endblock %})  </span>
                          </label> 
                        </span>   
                        <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.11" autocomplete="off" >
                          <label for="reactions_trigger-01.11" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                            <i class="far fa-thumbs-down "></i>  Disagree({% block qn_1_ans_1_rxn_2_disagree_num %}0 {% endblock %}) </span>
                          </label> 
                        </span>
                       <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share     </span> 
                  </div>
                    
                 </div>
              {% endblock %}

                 <div class=" students_answer_input-box">      
                    <form action="#trending_Q&A" method="POST" class="Answer_form"  enctype="multipart/form-data"> 
                       <textarea class="form-control students_answer_input-box_textarea" placeholder="Write your Reaction here.."  rows="3" id="" ></textarea>
                       <div class="input-group ">
                           <div class="input-group-prepend">
                             <span class="input-group-text" id="file_upload">Upload file</span>
                           </div>
                           <div class="custom-file">
                             <input type="file" class="custom-file-input" id="custom-user-file-reactions" onchange="readURL(this);" accept="/image">
                             <label class="custom-file-label" for="inputGroupFile01"></label>
                           </div>
                       </div>
                       <button  type="submit" id="Answer_btn_submit-answers" class="btn Answer_btn_submit" title="Send"><svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" height="24" viewBox="0 0 24 24" width="24">
                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                        <path d="M0 0h24v24H0z" fill="none"/> </svg>
                       </button>
                     </form>
                 </div>
               </div>
          </section>
  
                 </div>
              </div>
            {% endblock %}
         </div>
  
          
            <div class="answer_section">
              {% block qn_1_ans_2 %}
               <div class="row studentsanswers  students_reply-01">
                   <div class="students_profile_pictures">{% block qn_1_std_5_profile_pic %}<a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/cmp.jpg" alt=""></a> <a class="student_name" href="http://">REX</a>   {% endblock %}
                     <div class="date_time_posted"><i>{% block qn_1_std_5_date_posted %} 1week ago{% endblock %}</i> </div> 
                   </div> 
                   <div class="question_box">
                     <p class="mb-0">{% block qn_1_ans_2_paragraph %}Just read the network hardware devices more and little of the general hardware.{% endblock %}</p>
                    </div>
     
                   
                    <div class="container-fluid">
                     <div class="row Answer_users_reactions">
                       {% block qn_1_ans_2_agree %}
                         <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.12"  >
                          <label for="reactions_trigger-01.12" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                               <i class="far fa-thumbs-up "></i>Agree( {% block qn_1_ans_2_agree_num %} 5 {% endblock %}) </span>
                           </label>
                         </span> 
                       {% endblock %}
                       {% block qn_1_ans_2_disagree %}
                         <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.13" >
                          <label for="reactions_trigger-01.13" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions " id="reaction_box_disagree">
                                 <i class="far fa-thumbs-down "></i>Disagree( {% block qn_1_ans_2_disagree_num %}1 {% endblock %})</span>
                             </label>
                           </span>
                       {% endblock %}
                       {% block qn_1_ans_2_rxn %}
                       <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views users_views_on_answered reactions"> 
                        <input type="checkbox" class="toggle_content_checkbox reactions_trigger-button" id="reactions_trigger-01.14" autocomplete="off" >
                        <label for="reactions_trigger-01.14" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box-01">Reactions( {% block qn_1_ans_2_rxn_num %}130 {% endblock %})</span>
                        </label>
                      </span>
                     {% endblock %}
                     {% block qn_1_ans_2_share %}
                     <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share
               
                     </span>
                     {% endblock %}
                      
                  </div>
             <section class="Reaction_Section">
               
              <span id="reaction_box" class="reactions_wrapper content_box_hidden_before_toggle-01" > 
                <div class="container-fluid reactions_title-box">Reactions</div>

                    {% block qn_1_ans_2_rxn_1 %}
                   <div class="container-fluid studentsanswers studentsquestion-excluding-1  student_reactions_on_trending_qns">
                     <div class="students_profile_pictures students_profile_pictures-reactions">{% block qn_1_std_6_profile_pic %}<a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/mox.jpg" alt=""></a> <a class="student_name" href="http://">Kimera Moxhus</a> {% endblock %}
                       <div class="date_time_posted"><i>{% block qn_1_std_6_date_posted %}12hours ago {% endblock %}</i> </div> 
                     </div>
                     <div class="question_box">
                       <p class="mb-0">{% block qn_1_ans_2_rxn_1_paragraph %} Mwana this is poison she needs to read all at least to have an idea of each of the hardware we had this Semester{% endblock %}</p>
                     </div>
                       <div class="row  student_views_on_reactions_about_trending_qns">
                         <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.15" autocomplete="off" >
                          <label for="reactions_trigger-01.15" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                             <i class="far fa-thumbs-up "></i>Agree({% block qn_1_ans_2_rxn_1_agree_num %}5 {% endblock %})  </span>
                           </label> 
                         </span>   
                         <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.16" autocomplete="off" >
                          <label for="reactions_trigger-01.16" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                             <i class="far fa-thumbs-down "></i>  Disagree({% block qn_1_ans_2_rxn_1_disagree_num %}1 {% endblock %}) </span>
                           </label> 
                         </span>
                         <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share
               
                         </span>   
                       </div>
                      
                   </div>
                   {% endblock %}
            
                 {% block qn_1_ans_2_rxn_2 %}
                    <div class="container-fluid studentsanswers studentsquestion-excluding-1  student_reactions_on_trending_qns">
            
                      <div class="students_profile_pictures students_profile_pictures-reactions">{% block qn_1_std_7_profile_pic %} <a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/isaac.jpg" alt=""></a> <a class="student_name" href="http://">Mubiru Isaac</a> {% endblock %}
                       <div class="date_time_posted"><i>{% block qn_1_std_7_date_posted %}2minutes ago {% endblock %}</i> </div> 
                      </div>
                      <div class="question_box">
                        <p class="mb-0">{% block qn_1_ans_2_rxn_2_paragraph %}Me i would advise you to do whatever you can to read everything before you enter the paper to avoid disappointments</p>{% endblock %}
                      </div>
                        <div class="row  student_views_on_reactions_about_trending_qns">
                           <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                            <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.17" autocomplete="off" >
                            <label for="reactions_trigger-01.17" class="toggle_content_label reactions_trigger-label"> 
                            <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                               <i class="far fa-thumbs-up "></i>Agree({% block qn_1_ans_2_rxn_2_agree_num %}1000 {% endblock %})  </span>
                             </label> 
                           </span>   
                           <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                            <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.18" autocomplete="off" >
                            <label for="reactions_trigger-01.18" class="toggle_content_label reactions_trigger-label"> 
                            <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                               <i class="far fa-thumbs-down "></i>  Disagree({% block qn_1_ans_2_rxn_2_disagree_num %}0 {% endblock %}) </span>
                             </label> 
                           </span>
                          <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share     </span> 
                     </div>
                       
                    </div>
                 {% endblock %}
           

                    <div class=" students_answer_input-box">      
                       <form action="#trending_Q&A" method="POST" class="Answer_form" enctype="multipart/form-data">
                          <textarea class="form-control students_answer_input-box_textarea" placeholder="Write your Reaction here.."  rows="3" id="" ></textarea>
                          <div class="input-group ">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="file_upload">Upload file</span>
                              </div>
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="custom-user-file-reactions" onchange="readURL(this);" accept="/image">
                                <label class="custom-file-label" for="inputGroupFile01"></label>
                              </div>
                          </div>
                          <button  type="submit" id="Answer_btn_submit-answers" class="btn Answer_btn_submit" title="Send"><svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" height="24" viewBox="0 0 24 24" width="24">
                           <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                           <path d="M0 0h24v24H0z" fill="none"/> </svg>
                          </button>
                        </form>

                  </span>
             </section>
     
                    </div>
                 </div>
               {% endblock %}
            </div>

     
          </div>
         </div> 
      {% endblock %}


      </div>

      {% endblock qn_1 %}
      
      {% block qn_2 %}
          <div class="row studentsquestion studentsquestion-excluding-1 studentsquestion-02">

            <div class="students_profile_pictures">{% block qn_2_std_1_profile_pic %} <a href="www.gpaelevator.com/nansambaracheal/"> <img id="students_profile_picture" src="../img/lawrenzo.jpg" alt=""></a> <a class="student_name" href="http://">MUGAMBWA LAWRENCE</a>   {% endblock qn_2_std_1_profile_pic %}
              <div class="date_time_posted"><i>{% block qn_2_std_1_date_posted %} Posted On 12/09/2019  12:00PM {% endblock qn_2_std_1_date_posted %}</i> </div>
            </div> 
            
            <div class="question_box">
              <h5> <i><span class="studentsquestion_topic">Topic: </span>{% block qn_2_topic %} Computer Architecture {% endblock qn_2_topic %}</h5></i> 
             <p class="mb-0">{% block qn_2_paragraph %} what is marie, i dont even have a single idea about it enlight me please {% endblock %}</p>
          </div>
  
          <div class="container-fluid">
            <div class="row users_reactions">
            {% block qn_2_rxn_like %}
              <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.1" autocomplete="off" >
                <label for="reactions_trigger-02.1" class="toggle_content_label reactions_trigger-label"> 
                <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                  <i class="far fa-thumbs-up "></i> Like({% block qn_2_like_num %}413 {% endblock %})</span>
                </label>
              </span> 
            {% endblock %} 
            {% block qn_2_rxn_ans %}
              <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 answers users_views" id=""> 
                <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.2" autocomplete="off" >
                <label for="reactions_trigger-02.2" class="toggle_more_years_button toggle_content_label reactions_trigger-label"> 
                <span class="users_views_active users_views_reactions" id="answer___section_tigger">
                    <i class="fas fa-pen-alt "></i> Answer({% block qn_2_ans_num %}20 {% endblock %})</span>
                </label>
              </span> 
            {% endblock %}  
            {% block qn_2_rxn_interest %}
              <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views"> 
                <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-03.3" autocomplete="off" >
                <label for="reactions_trigger-03.3" class="toggle_content_label reactions_trigger-label"> 
                <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                     Interested({% block qn_2_interest_num %}10 {% endblock %}) </span>
                </label>
              </span>  
            {% endblock %}
            {% block qn_2_rxn_share %}
              <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle"> <i class="fas fa-share "></i>  Share
              </span> 
            {% endblock %}  
         </div>


         <div class="answer___section"  id="students_answer_wrapper">
          <div class="answer_section">

            {% block qn_2_ans_1 %}
            <div class="row studentsanswers  students_reply-01">
              <div class="students_profile_pictures">{% block qn_2_std_2_profile_pic %} <a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../img/patrick_cedat.jpg" alt=""><a class="student_name" href="http://">Birungi Patrick</a>  {% endblock %}
                <div class="date_time_posted"><i>{% block qn_2_std_2_date_posted %} 3days ago{% endblock %}</i> </div> 
              </div> 
              <div class="question_box">
                <p class="mb-0">{% block qn_2_ans_1_paragraph %} There is my answer agree or disagree? {% endblock %}</p>
                <div class="students_question_img">{% block qn_2_ans_1_pic %}<img class="students_question_img" src="../img/soln.jpg" alt="">{% endblock %} </div>
              </div>
              <div class="container-fluid">
                <div class="row Answer_users_reactions">
                  {% block qn_2_ans_1_agree %}
                  <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                    <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.4"  >
                    <label for="reactions_trigger-02.4" class="toggle_content_label reactions_trigger-label"> 
                    <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                        <i class="far fa-thumbs-up "></i>Agree( {% block qn_2_ans_1_agree_num %} 5 {% endblock %}) </span>
                    </label>
                  </span> 
                {% endblock %}
                {% block qn_2_ans_1_disagree %}
                <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                  <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.5" >
                  <label for="reactions_trigger-02.5" class="toggle_content_label reactions_trigger-label"> 
                  <span class="users_views_active users_views_reactions " id="reaction_box_disagree">
                        <i class="far fa-thumbs-down "></i>Disagree( {% block qn_2_ans_1_disagree_num %}1 {% endblock %})</span>
                    </label>
                </span>
              {% endblock %}
              {% block qn_2_ans_1_rxn %}
                    <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views users_views_on_answered reactions"> 
                      <input type="checkbox" class="toggle_content_checkbox reactions_trigger-button" id="reactions_trigger-02.6" autocomplete="off" >
                      <label for="reactions_trigger-02.6" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_on_answer_01_on_qn2-trigger">
                        Reactions( {% block qn_2_ans_1_rxn_num %}134 {% endblock %})</span>
                  </span>
              {% endblock %}
              {% block qn_2_ans_1_share %}
                  <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share
                  </span>
                  {% endblock %} 
                </div>
                <section class="Reaction_Section">
                  <span id="" class="reactions_wrapper reaction_on_answer_01_on_qn2" > 
                    <div class="container-fluid reactions_title-box">Reactions</div>

                    {% block qn_2_ans_1_rxn_1 %}
                    <div class="container-fluid studentsanswers studentsquestion-excluding-1  student_reactions_on_trending_qns">
                      <div class="students_profile_pictures students_profile_pictures-reactions">{% block qn_2_std_3_profile_pic %}<a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/mox.jpg" alt=""></a> <a class="student_name" href="http://">Kimera Moxhus Ug</a> {% endblock %}
                        <div class="date_time_posted"><i>{% block qn_2_std_3_date_posted %}12hours ago {% endblock %}</i> </div> 
                      </div>

                      <div class="question_box">
                        <p class="mb-0">{% block qn_2_ans_1_rxn_1_paragraph %} Mwana this is poison she needs to read all at least to have an idea of each of the hardware we had this Semester{% endblock %}</p>
                      </div>

                      <div class="row  student_views_on_reactions_about_trending_qns">
                        <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.7" autocomplete="off" >
                          <label for="reactions_trigger-02.7" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                            <i class="far fa-thumbs-up "></i>Agree({% block qn_2_ans_1_rxn_1_agree_num %}5 {% endblock %})  </span>
                          </label> 
                        </span> 

                        <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.8" autocomplete="off" >
                          <label for="reactions_trigger-02.8" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                            <i class="far fa-thumbs-down "></i>  Disagree({% block qn_2_ans_1_rxn_1_disagree_num %}1 {% endblock %}) </span>
                          </label> 
                        </span>

                        <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share
                        </span>  

                      </div>

                    </div>
                    {% endblock %}

                    {% block qn_2_ans_1_rxn_2 %}
                    <div class="container-fluid studentsanswers studentsquestion-excluding-1  student_reactions_on_trending_qns">
                      <div class="students_profile_pictures students_profile_pictures-reactions">{% block qn_2_std_4_profile_pic %} <a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/isaac.jpg" alt=""></a> <a class="student_name" href="http://">Mubiru Isaac</a> {% endblock %}
                        <div class="date_time_posted"><i>{% block qn_2_std_4_date_posted %}2minutes ago {% endblock %}</i> </div> 
                       </div>

                       <div class="question_box">
                        <p class="mb-0">{% block qn_2_ans_1_rxn_2_paragraph %}Me i would advise you to do whatever you can to read everything before you enter the paper to avoid disappointments</p>{% endblock %}
                      </div>
                      <div class="row  student_views_on_reactions_about_trending_qns">
                        <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.9" autocomplete="off" >
                          <label for="reactions_trigger-02.9" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                            <i class="far fa-thumbs-up "></i>Agree({% block qn_2_ans_1_rxn_2_agree_num %}1000 {% endblock %})  </span>
                          </label> 
                        </span> 
                        <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.11" autocomplete="off" >
                          <label for="reactions_trigger-02.11" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                            <i class="far fa-thumbs-down "></i>  Disagree({% block qn_2_ans_1_rxn_2_disagree_num %}0 {% endblock %}) </span>
                          </label> 
                        </span>
                        <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share     </span> 
                      </div>
                    </div>
                    {% endblock %}

                    <div class=" students_answer_input-box">      
                      <form action="#trending_Q&A" method="POST" class="Answer_form" enctype="multipart/form-data">
                         <textarea class="form-control students_answer_input-box_textarea" placeholder="Write your Reaction here.."  rows="3" id="" ></textarea>
                         <div class="input-group ">
                             <div class="input-group-prepend">
                               <span class="input-group-text" id="file_upload">Upload file</span>
                             </div>
                             <div class="custom-file">
                               <input type="file" class="custom-file-input" id="custom-user-file-reactions" onchange="readURL(this);" accept="/image">
                               <label class="custom-file-label" for="inputGroupFile01"></label>
                             </div>
                         </div>
                         <button  type="submit" id="Answer_btn_submit-answers" class="btn Answer_btn_submit" title="Send"><img id="send-svg" src="../img/send.svg"/></button>
                       </form>
                   </div>

                    </span>
                </section>


              </div>

            </div>
            {% endblock qn_2_ans_1 %}
          </div>
          <div class="answer_section">
            {% block qn_2_ans_2 %}
            <div class="row studentsanswers studentsquestion-excluding-1 studentsquestion-02">
              <div class="students_profile_pictures">{% block qn_2_std_5_profile_pic %}<a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/cmp.jpg" alt=""></a> <a class="student_name" href="http://">REX</a>   {% endblock %}
                <div class="date_time_posted"><i>{% block qn_2_std_5_date_posted %} 1week ago{% endblock %}</i> </div> 
              </div>

              <div class="question_box">
                <p class="mb-0">{% block qn_2_ans_2_paragraph %}Just read the network hardware devices more and little of the general hardware.{% endblock %}</p>
               </div>

               <div class="container-fluid">
                <div class="row Answer_users_reactions">
                  {% block qn_2_ans_2_agree %}
                  <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                    <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.12"  >
                    <label for="reactions_trigger-02.12" class="toggle_content_label reactions_trigger-label"> 
                    <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                         <i class="far fa-thumbs-up "></i>Agree( {% block qn_2_ans_2_agree_num %} 5 {% endblock %}) </span>
                     </label>
                   </span> 
                  {% endblock %}

                  {% block qn_2_ans_2_disagree %}
                  <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                   <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.13" >
                   <label for="reactions_trigger-02.13" class="toggle_content_label reactions_trigger-label"> 
                   <span class="users_views_active users_views_reactions " id="reaction_box_disagree">
                          <i class="far fa-thumbs-down "></i>Disagree( {% block qn_2_ans_2_disagree_num %}1 {% endblock %})</span>
                      </label>
                    </span>
                {% endblock %}

                {% block qn_2_ans_2_rxn %}
                <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views users_views_on_answered reactions"> 
                  <input type="checkbox" class="toggle_content_checkbox reactions_trigger-button" id="reactions_trigger-02.14" autocomplete="off" >
                  <label for="reactions_trigger-02.14" class="toggle_content_label reactions_trigger-label"> 
                    <span class="users_views_active users_views_reactions" id="reaction_on_answer_02_on_qn2-trigger">Reactions( {% block qn_2_ans_2_rxn_num %}130 {% endblock %})</span>
                  </label>
                </span> 
              {% endblock %}

              {% block qn_2_ans_2_share %}
                <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share
                </span>
              {% endblock %}

                </div>

                <section class="Reaction_Section">
                  <span id="" class="reactions_wrapper reaction_on_answer_02_on_qn2" >
                  <div class="container-fluid reactions_title-box">Reactions</div>

                  {% block qn_2_ans_2_rxn_1 %}
                  <div class="container-fluid studentsanswers studentsquestion-excluding-1  student_reactions_on_trending_qns">
                    <div class="students_profile_pictures students_profile_pictures-reactions">{% block qn_2_std_6_profile_pic %}<a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/mox.jpg" alt=""></a> <a class="student_name" href="http://">Kimera Mox</a> {% endblock %}
                      <div class="date_time_posted"><i>{% block qn_2_std_6_date_posted %}12hours ago {% endblock %}</i> </div> 
                    </div>

                    <div class="question_box">
                      <p class="mb-0">{% block qn_2_ans_2_rxn_1_paragraph %} Mwana this is poison she needs to read all at least to have an idea of each of the hardware we had this Semester{% endblock %}</p>
                    </div>

                    <div class="row  student_views_on_reactions_about_trending_qns">

                      <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                        <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.15" autocomplete="off" >
                        <label for="reactions_trigger-02.15" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                           <i class="far fa-thumbs-up "></i>Agree({% block qn_2_ans_2_rxn_1_agree_num %}5 {% endblock %})  </span>
                         </label> 
                       </span> 

                       <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                        <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.16" autocomplete="off" >
                        <label for="reactions_trigger-02.16" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                           <i class="far fa-thumbs-down "></i>  Disagree({% block qn_2_ans_2_rxn_1_disagree_num %}1 {% endblock %}) </span>
                         </label> 
                       </span>

                       <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share </span>   
                    </div>

                  </div>

                  {% endblock %}

                  {% block qn_2_ans_2_rxn_2 %}
                  <div class="container-fluid studentsanswers studentsquestion-excluding-1  student_reactions_on_trending_qns">
                    <div class="students_profile_pictures students_profile_pictures-reactions">{% block qn_2_std_7_profile_pic %} <a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/isaac.jpg" alt=""></a> <a class="student_name" href="http://">Mubiru Isaac</a> {% endblock %}
                      <div class="date_time_posted"><i>{% block qn_2_std_7_date_posted %}2minutes ago {% endblock %}</i> </div> 
                     </div>

                     <div class="question_box">
                       <p class="mb-0">{% block qn_2_ans_2_rxn_2_paragraph %}Me i would advise you to do whatever you can to read everything before you enter the paper to avoid disappointments</p>{% endblock %}
                     </div>
                     <div class="row  student_views_on_reactions_about_trending_qns">

                      <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                        <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.17" autocomplete="off" >
                        <label for="reactions_trigger-02.17" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                           <i class="far fa-thumbs-up "></i>Agree({% block qn_2_ans_2_rxn_2_agree_num %}1000 {% endblock %})  </span>
                         </label> 
                       </span> 

                       <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                        <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.18" autocomplete="off" >
                        <label for="reactions_trigger-02.18" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                           <i class="far fa-thumbs-down "></i>  Disagree({% block qn_2_ans_2_rxn_2_disagree_num %}0 {% endblock %}) </span>
                         </label> 
                       </span>

                       <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share     </span> 
                     </div>
                  </div>
                  {% endblock qn_2_ans_2_rxn_2 %}
                  <div class=" students_answer_input-box">      
                    <form action="#trending_Q&A" method="POST" class="Answer_form" enctype="multipart/form-data">
                       <textarea class="form-control students_answer_input-box_textarea" placeholder="Write your Reaction here.."  rows="3" id="" ></textarea>
                       <div class="input-group ">
                           <div class="input-group-prepend">
                             <span class="input-group-text" id="file_upload">Upload file</span>
                           </div>
                           <div class="custom-file">
                             <input type="file" class="custom-file-input" id="custom-user-file-reactions" onchange="readURL(this);" accept="/image">
                             <label class="custom-file-label" for="inputGroupFile01"></label>
                           </div>
                       </div>
                       <button  type="submit" id="Answer_btn_submit-answers" class="btn Answer_btn_submit" title="Send"><img id="send-svg" src="../img/send.svg"/></button>
                     </form>
                  </div>

                  </span>
                </section>

               </div>
            </div>
            {% endblock qn_2_ans_2 %}
            <hr>
            <div class=" students_answer_input-box">      
                <form action="#trending_Q&A" method="POST" class="Answer_form" enctype="multipart/form-data">
                   <textarea class="form-control students_answer_input-box_textarea" placeholder="Write your Answer here.."  rows="3" id="" ></textarea>
                   <div class="input-group ">
                       <div class="input-group-prepend">
                         <span class="input-group-text" id="file_upload">Upload file</span>
                       </div>
                       <div class="custom-file">
                         <input type="file" class="custom-file-input" id="custom-user-file-reactions" onchange="readURL(this);" accept="/image">
                         <label class="custom-file-label" for="inputGroupFile01"></label>
                       </div>
                   </div>
                   <button  type="submit" id="Answer_btn_submit-answers" class="btn Answer_btn_submit" title="Send"><img id="send-svg" src="../img/send.svg"/></button>
                 </form>
            </div>

          </div>

         </div>

          </div>
        </div>
      {% endblock qn_2 %}

        </div>



        <div class="container-fluid pagination">
              <a href="#" ><i class="fas fa-chevron-left more-members-icons"></i> </a>
              <a href="#" class="more-members active">1</a>
              <a href="#" class="more-members">2</a>
              <a href="#" class="more-members">3</a>
              <a href="#" class="more-members">4</a>
              <a href="#" ><i class="fas fa-chevron-right more-members-icons"></i> </a>
    
    
        </div>

      </div>
    </div>
    
    
    

    

     
    <div class="container-fluid discussion-section">
      <div class="u-center-text">
        <h3 class="discussion-section-heading">
          GET HELP FROM INDIVIDUAL STUDENTS
        </h3>
      </div>
      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 std-card" id="col-1-of-6">
          <div class="card">
            <div class="card_side card_side-front">
              <div class="card_img">
                {% block discus_std_1_profile_pic %}<img src="../img/moxhus.jpg" id="img-law" alt="student's profile picture">{% endblock %}
              </div>
            <h3><b>{% block discus_std_1_name %} Kimera Moses{% endblock %}</b></h3>
            <hr>
             <h5><b>Topic of Expertise:</b> <i>{% block discus_std_1_topic %}Virtual Memory & I/O control Methods{% endblock %}</i></h5>
             <h5><b>Contact On</b></h5>
            <p>Phone Number: {% block discus_std_1_contact %}0778451024/0759130054{% endblock %}<br>
             Email: <a href="#">{% block discus_std_1_email %}kimeramoses001@gmail.com{% endblock %}</a> </p>
            </div>
            <div class="card_side card_side-back card_side-back-01">
    
              <h1>About Student</h1>
              <hr>
              <ul>
              <li><b>Name:</b> {% block discus_std_1_name_bk %}Kimera Moses {% endblock %}<br></li>
                <li><b>University:</b>{% block discus_std_1_univ %} Makerere {% endblock %}University <br><li>
                <li><b>College/Faculty:</b> {% block discus_std_1_col %} CEDAT {% endblock %}<br><li>
                <li><b>Course:</b>{% block discus_std_1_course %} Bs.Computer Engineering {% endblock %}<br></li>
                <li><b>Year:</b> 2<br></li>
                <li><b>Prefered days:</b>
                  <ul id="prefered_days">
                    <li>{% block discus_std_1_day_1 %} Mon-5pm to 8pm {% endblock %}</li>
                    <li>{% block discus_std_1_day_2 %}Wed-3pm to 4pm {% endblock %}</li>
                    <li>{% block discus_std_1_day_3 %}Fri-6pm to 09pm {% endblock %}</li>
                    <li>{% block discus_std_1_day_4 %}Sat-08am to 5pm{% endblock %}</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 std-card" id="col-2-of-6">
          <div class="card">
            <div class="card_side card_side-front">
              <div class="card_img">
                {% block discus_std_2_profile_pic %} <img src="../img/fred.jpg" id="img-law" alt="student's profile picture">{% endblock %}
              </div>
            <h3><b>{% block discus_std_2_name %} Tamale Fredrick {% endblock %}</b></h3>
            <hr>
             <h5><b>Topic of Expertise:</b> <i>{% block discus_std_2_topic %}R.A.I.D & General revision{% endblock %}</i></h5>
             <h5><b>Contact On</b></h5>
            <p>Phone Number: {% block discus_std_2_contact %}0778451024/0759130054{% endblock %}<br>
             Email: <a href="#">{% block discus_std_2_email %}kimeramoses001@gmail.com{% endblock %}</a> </p>
            </div>
            <div class="card_side card_side-back card_side-back-01">
    
              <h1>About Student</h1>
              <hr>
              <ul>
              <li><b>Name:</b> {% block discus_std_2_name_bk %}Tamale Fredrick {% endblock %}<br></li>
                <li><b>University:</b>{% block discus_std_2_univ %} Makerere {% endblock %}University <br><li>
                <li><b>College/Faculty:</b> {% block discus_std_2_col %} CEDAT {% endblock %}<br><li>
                <li><b>Course:</b>{% block discus_std_2_course %} Bs.Computer Engineering {% endblock %}<br></li>
                <li><b>Year:</b> 2<br></li>
                <li><b>Prefered days:</b>
                  <ul id="prefered_days">
                    <li>{% block discus_std_2_day_1 %} Mon-5pm to 8pm {% endblock %}</li>
                    <li>{% block discus_std_2_day_2 %}Wed-3pm to 4pm {% endblock %}</li>
                    <li>{% block discus_std_2_day_3 %}Fri-6pm to 09pm {% endblock %}</li>
                    <li>{% block discus_std_2_day_4 %}Sat-08am to 5pm{% endblock %}</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 std-card" id="col-3-of-6">
          <div class="card">
            <div class="card_side card_side-front">
              <div class="card_img">
                {% block discus_std_3_profile_pic %}<img src="../img/eddie.jpg" id="img-law"  alt="student's profile picture">{% endblock %}
              </div>
            <h3><b>{% block discus_std_3_name %} Namanya Eddie {% endblock %}</b></h3>
            <hr>
             <h5><b>Topic of Expertise:</b> <i>{% block discus_std_3_topic %}Error Detection & correction{% endblock %}</i></h5>
             <h5><b>Contact On</b></h5>
            <p>Phone Number: {% block discus_std_3_contact %}0778451024/0759130054{% endblock %}<br>
             Email: <a href="#">{% block discus_std_3_email %}kimeramoses001@gmail.com{% endblock %}</a> </p>
            </div>
            <div class="card_side card_side-back card_side-back-01">
    
              <h1>About Student</h1>
              <hr>
              <ul>
              <li><b>Name:</b> {% block discus_std_3_name_bk %}Namanya Eddie {% endblock %}<br></li>
                <li><b>University:</b>{% block discus_std_3_univ %} Makerere {% endblock %}University <br><li>
                <li><b>College/Faculty:</b> {% block discus_std_3_col %} CEDAT {% endblock %}<br><li>
                <li><b>Course:</b>{% block discus_std_3_course %} Bs.Computer Engineering {% endblock %}<br></li>
                <li><b>Year:</b> 2<br></li>
                <li><b>Prefered days:</b>
                  <ul id="prefered_days">
                    <li>{% block discus_std_3_day_1 %} Mon-5pm to 8pm {% endblock %}</li>
                    <li>{% block discus_std_3_day_2 %}Wed-3pm to 4pm {% endblock %}</li>
                    <li>{% block discus_std_3_day_3 %}Fri-6pm to 09pm {% endblock %}</li>
                    <li>{% block discus_std_3_day_4 %}Sat-08am to 5pm{% endblock %}</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 std-card" id="col-4-of-6">
          <div class="card">
            <div class="card_side card_side-front">
              <div class="card_img">
                {% block discus_std_4_profile_pic %}<img src="../img/precious.jpg" id="img-law" alt="student's profile picture">{% endblock %}
              </div>
            <h3><b>{% block discus_std_4_name %} Nansamba Racheal {% endblock %}</b></h3>
            <hr>
             <h5><b>Topic of Expertise:</b> <i>{% block discus_std_4_topic %}Computer Architecture{% endblock %}</i></h5>
             <h5><b>Contact On</b></h5>
            <p>Phone Number: {% block discus_std_4_contact %}0778451024/0759130054{% endblock %}<br>
             Email: <a href="#">{% block discus_std_4_email %}nansambaracheal@gmail.com{% endblock %}</a> </p>
            </div>
            <div class="card_side card_side-back card_side-back-01">
    
              <h1>About Student</h1>
              <hr>
              <ul>
              <li><b>Name:</b> {% block discus_std_4_name_bk %}Nansamba Racheal {% endblock %}<br></li>
                <li><b>University:</b>{% block discus_std_4_univ %} Makerere {% endblock %}University <br><li>
                <li><b>College/Faculty:</b> {% block discus_std_4_col %} CEDAT {% endblock %}<br><li>
                <li><b>Course:</b>{% block discus_std_4_course %} Bs.Computer Engineering {% endblock %}<br></li>
                <li><b>Year:</b> 2<br></li>
                <li><b>Prefered days:</b>
                  <ul id="prefered_days">
                    <li>{% block discus_std_4_day_1 %} Mon-5pm to 8pm {% endblock %}</li>
                    <li>{% block discus_std_4_day_2 %}Wed-3pm to 4pm {% endblock %}</li>
                    <li>{% block discus_std_4_day_3 %}Fri-6pm to 09pm {% endblock %}</li>
                    <li>{% block discus_std_4_day_4 %}Sat-08am to 5pm{% endblock %}</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 std-card" id="col-5-of-6">
          <div class="card">
            <div class="card_side card_side-front">
              <div class="card_img">
                {% block discus_std_5_profile_pic %}<img src="../img/associate-prof.jpg" id="img-law" alt="student's profile picture">{% endblock %}
              </div>
            <h3><b>{% block discus_std_5_name %} Mubiru Isaac {% endblock %}</b></h3>
            <hr>
             <h5><b>Topic of Expertise:</b> <i>{% block discus_std_5_topic %}Parity bits & Numbering Systems{% endblock %}</i></h5>
             <h5><b>Contact On</b></h5>
            <p>Phone Number: {% block discus_std_5_contact %}0778451024/0759130054{% endblock %}<br>
             Email: <a href="#">{% block discus_std_5_email %}mubiruzac@gmail.com{% endblock %}</a> </p>
            </div>
            <div class="card_side card_side-back card_side-back-01">
    
              <h1>About Student</h1>
              <hr>
              <ul>
              <li><b>Name:</b> {% block discus_std_5_name_bk %}Eng Mubiru Isaac {% endblock %}<br></li>
                <li><b>University:</b>{% block discus_std_5_univ %} Makerere {% endblock %}University <br><li>
                <li><b>College/Faculty:</b> {% block discus_std_5_col %} CEDAT {% endblock %}<br><li>
                <li><b>Course:</b>{% block discus_std_5_course %} Bs.Computer Engineering {% endblock %}<br></li>
                <li><b>Year:</b> 2<br></li>
                <li><b>Prefered days:</b>
                  <ul id="prefered_days">
                    <li>{% block discus_std_5_day_1 %} Mon-5pm to 8pm {% endblock %}</li>
                    <li>{% block discus_std_5_day_2 %}Wed-3pm to 4pm {% endblock %}</li>
                    <li>{% block discus_std_5_day_3 %}Fri-6pm to 09pm {% endblock %}</li>
                    <li>{% block discus_std_5_day_4 %}Sat-08am to 5pm{% endblock %}</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 std-card" id="col-6-of-6">
            <div class=" card-special">
              <div class="card-special-inside">
            <h2><b>Need to discuss for others?</b></h2>
            <hr class="discuss-rule">
           <p>If you are well conversant with any topic(s) in this course unit
           and that you are capable of discussing it to other students please contact Moses to be added in this section<br>
           You can also contact him if you have got link(s) to any resourcefull materials like Youtube videos,websites and much more.
         <br>contact him on 0778451024/0759130054<br>Email: 
         <a href="#" class="discussion-platform-expert-email"> kimeramoses001@gmail.com </a><br>
         OR
         <a href="#" class="discussion-platform-expert-email"> info@gpaelevator.com </a>
        </p>
      </div>
        </div>
      </div>
      </div>
    </div>
</div>

{% endblock content %}


