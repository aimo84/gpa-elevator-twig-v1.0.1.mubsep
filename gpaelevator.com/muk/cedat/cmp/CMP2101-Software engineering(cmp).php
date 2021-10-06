{% extends "gpa_elevator/templates/courseunit-template.php" %}


{% block col_title %}
CMP2101-Software Engineering 
{% endblock %}
{% block coursecode %} CMP2101{% endblock %}
{% block nav_col_name %}<a href="http://localhost/cedat/index">Cedat{% endblock %}
{% block Course_unit_name %}<a href="http://localhost/cedat/CMP2101">{{ block('coursecode') }} {% endblock %}
{% block courseunit %}CMP2101:Software Engineering{% endblock %}

{% block lectureNotice %} 
<li class="lecture-notes"><b><i><a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Lecture_notes/Lecture 1.pdf">{{ block('pdf_icon') }}Lec1-Introduction</a></i></b></li>
<li class="lecture-notes"><b><i><a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Lecture_notes/Lecture 02 Software Processes.pdf">{{ block('pdf_icon') }}Lec02-Software Processes</a></i></b></li>
<li class="lecture-notes"><b><i><a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Lecture_notes/Lecture 03A Requirements Engineering.pdf">{{ block('pdf_icon') }}Lec03A-Requirements Engineering</a></i></b></li>
<li class="lecture-notes"><b><i><a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Lecture_notes/Lecture 03B Requirements Engineering.pdf">{{ block('pdf_icon') }}Lec03B-Requirements Engineering</a></i></b></li>
<li class="lecture-notes"><b><i><a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Lecture_notes/Lecture 04A- Design Notes.pdf">{{ block('pdf_icon') }}Lec04A-Design Notes</a></i></b></li>
<li class="lecture-notes"><b><i><a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Lecture_notes/Lecture 04B- Design Notes.pdf">{{ block('pdf_icon') }}Lec04B-Design Notes</a></i></b></li>
<li class="lecture-notes"><b><i><a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Lecture_notes/Lecture 04C - Object Oriented  Analysis and Design.pdf">{{ block('pdf_icon') }}Lec04C-Object Oriented Analysis and Design</a></i></b></li>
<li class="lecture-notes"><b><i><a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Lecture_notes/Lecture 04D - Object Oriented  Analysis and Design.pdf">{{ block('pdf_icon') }}Lec04D-Object Oriented Analysis and Design</a></i></b></li>
<li class="lecture-notes"><b><i><a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Lecture_notes/Lecture 05 Software Verification and Validation.pdf">{{ block('pdf_icon') }}Lec05A-Software Verification and Validation</a></i></b></li>
<li class="lecture-notes"><b><i><a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Lecture_notes/Lecture 5 - Unified_Modeling_Language_Guide_Version_021.pdf">{{ block('pdf_icon') }}Lec05B-Unified Modeling Language Guide</a></i></b></li>
<li class="lecture-notes"><b><i><a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Lecture_notes/Lecture 06 Software maintenance.pdf">{{ block('pdf_icon') }}Lec06-Software maintenance</a></i></b></li>
<li class="lecture-notes"><b><i><a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Lecture_notes/Lecture 07 Software Tools and Environments Notes.pdf">{{ block('pdf_icon') }}Lec07-Software Tools and Environments Notes</a></i></b></li>
<li class="lecture-notes"><b><i><a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Lecture_notes/Lecture 08 Language Translation.pdf">{{ block('pdf_icon') }}Lec08-Language Translation</a></i></b></li>
<li class="lecture-notes"><b><i><a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Lecture_notes/Lecture 09 Fault Tolerance.pdf">{{ block('pdf_icon') }}Lec09-Fault Tolerance</a></i></b></li>
<li class="lecture-notes"><b><i><a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Lecture_notes/Design-conclusion.pdf">{{ block('pdf_icon') }}Lec10-Design</a></i></b></li>
{% endblock %}
{% block extra_lecture_notes %}{% endblock %} 

{% block ref_textbk_1_link %}<a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Reference_books/Software_Engineering_9th_Edition.pdf">{% endblock %} {% block ref_textbk_1_title %}Software_Eng.9thEdtn{% endblock %}
{% block ref_textbk_2_link %}<a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Reference_books/tutorial_UML.pdf">{% endblock %} {% block ref_textbk_2_title %}tutorial_UML{% endblock %}
{% block ref_textbk_3_link %}<a href="http://localhost/pdf/muk/computer_eng/year2/sem1/software_engineering/Reference_books/Software_Engineering_-_Pressman.pdf">{% endblock %} {% block ref_textbk_3_title %}Software_Eng-Pressman{% endblock %}

{% block courseunit_link_1 %} <a href="http://localhost/cedat/CMP2103" id="other_course_unit-linkbutton" class="link-item btn--pink">CMP2103-Object Oriented Programming{% endblock courseunit_link_1 %}
{% block courseunit_link_2 %} <a href="http://localhost/cedat/CMP2102" class="link-item btn--lightgreen" id="other_course_unit-linkbutton">CMP2102-Electric Circuits & Signals{% endblock courseunit_link_2 %}


{% block youtube_links %}
<li> <a href="#" >Waterfall Model</a></li>
<li><a href="#">Unified Modelling Language</a></li>
<li><a href="#">Software Requirements</a></li>
<li><a href="#">Requirement Elicitation</a></li>
<li><a href="#">Software Process & Process Models</a></li>
{% endblock youtube_links %}




