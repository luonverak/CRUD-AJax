<?php
    function workOT($work){
        // 5$/1h
        $total = $work * 5;
        return $total;
    }
    function getIncome($_position,$salary,$work){
        $bonus = 0.0;
        if(strcmp($_position,'Manager')){
            $bonus = $salary + ($salary*0.20) + workOT($work);
        }else if(strcmp($_position,'Accounting')){
            $bonus = $salary + ($salary*0.15) + workOT($work);
        }else if(strcmp($_position,'IT')){
            $bonus = $salary + ($salary*0.25) + workOT($work);
        }else{
            $bonus = $salary + ($salary*0.10) + workOT($work);
        }
        return $bonus;
    }
?>