<table cellpadding="0" cellspacing="0" border="0" id="table" class="tinytable">
    <thead>
         <tr>

                    <th class="nosort"><h3>ID</h3></th>

                    <th><h3>Student Number</h3></th>

                    <th><h3>First Name</h3></th>

                    <th><h3>Family Name</h3></th>

               </tr>

    </thead>
    <tbody>
    <tr>
    
        <?php foreach ($students as $student):?>
           
            <td><?php echo $student->idstudent;?></td>
            <td><?php echo $student->student_number;?></td>
            <td><?php echo ucfirst(strtolower($student->student_fname));?></td>
            <td><?php echo ucfirst(strtolower($student->student_lname));?></td>
           <!--
 <td><?php //echo $q->course_name;?></td>
            <td><?php //echo $q['ttgrp_code'];?></td>
-->
            </tr>
           
        <?php endforeach;?> 
        

    </tbody>
</table>
