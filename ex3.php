<?php 

class vehicle
{
    public function submitForm()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $make = $_POST['make'] ?? null;
            $model = $_POST['model'] ?? null;
            $year = $_POST['year'] ?? null;
            $color = $_POST['color'] ?? null;
            
                if(!empty($make && $model && $year && $color))
                {
                    return 'ok';
                }else{
                     return 'not ok';
                }
        }
    }
}
        
    

