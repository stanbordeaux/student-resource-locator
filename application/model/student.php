<?php

class student_model {
    
     //student data
     public function get_students()
     {
        
        $data = db('student')->all();
        
        return $data;
     }
     
     public function student($id)
     {
        $data = db('student')
                    ->select('*')
                    ->where('idstudent', '=', $id)
                    ->execute();
        
        return $data;
     }
     
     
     public function count_students()
     {
        $count = db('student')->count()
                   ->execute();
        if ($count > 0)
        {
            return $count;
        }
        else
        {
            $count = 'got nuttin';
            return $count;
        }
     }
     
     public function get_num_rows()
     {
        $table = db('student');
        $num_rows = $table->total();
        return $num_rows;
     }
}