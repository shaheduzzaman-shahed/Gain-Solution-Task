<?php
namespace App\Http\Controllers\Helper;

trait SegmentTrait{

    private function makeUsableArray($segment){
        $segmentArr=[];
        $or=[];
        foreach ($segment->segment_logics as $key => $logic){
            if($logic->condition=='or'){
                $a = array($logic->logic,$logic->operator,$logic->value);
                $or[]=$a;
            }else{
                if (sizeof($or)>0){
                    $a = array($logic->logic,$logic->operator,$logic->value);
                    $or[]=$a;
                    $segmentArr[]=$or;
                    $or = [];
                }else{
                    $segmentArr[] = array($logic->logic,$logic->operator,$logic->value);
                }

            }

        }

        return $segmentArr;
    }

    public function conditionalQuery($segment, $query){
        $segments = $this->makeUsableArray($segment);
        foreach ($segments as $logics) {
            if (is_array($logics[0])) {
                $query->where(function ($query) use ($logics) {
                    foreach ($logics as $key => $logic) {
                        $clause = $key == 0 ? 'where' : 'orWhere';
                        $this->segmentQuery($query, $logic, $clause);
                    }
                });
            } else {
                $query->where(function ($query) use ($logics) {
                    $clause = 'where';
                    $logic = $logics;
                    $this->segmentQuery($query, $logic, $clause);
                });
            }
        }
    }
    private function segmentQuery($query, $logic, $clause){
        if ($logic[1] == 'before'){
            $query->$clause($logic[0], "<", $logic[2]);
        }
        else if ($logic[1] == 'after'){
            $query->$clause($logic[0], ">", $logic[2]);
        }
        else if ($logic[1] == 'on'){
            $query->$clause($logic[0], "=", $logic[2]);
        }
        else if ($logic[1] == 'on or before'){
            $query->$clause($logic[0], "<=", $logic[2]);
        }
        else if ($logic[1] == 'on or after'){
            $query->$clause($logic[0], ">=", $logic[2]);
        }
        else if ($logic[1] == 'between'){
            $clause = $clause.'Between';
            $query->$clause($logic[0], explode(',',$logic[2]) );
        }
        else if($logic[1] == 'contains'){
            $query->$clause($logic[0], "like", '%'.$logic[2].'%');
        }
        else if($logic[1] == 'doesnot_contains'){
            $query->$clause($logic[0], "not like", '%'.$logic[2].'%');
        }
        else if($logic[1] == 'is'){
            $query->$clause($logic[0], "=", $logic[2]);
        }
        else if($logic[1] == 'is_not'){
            $query->$clause($logic[0], "!=", $logic[2]);
        }
        else if($logic[1] == 'starts_with'){
            $query->$clause($logic[0], "like", $logic[2].'%');
        }
        else if($logic[1] == 'doesnot_starts_with'){
            $query->$clause($logic[0], "not like", $logic[2].'%');
        }
        else if($logic[1] == 'ends_with'){
            $query->$clause($logic[0], "like", '%'.$logic[2]);
        }
        else if($logic[1] == 'doesnot_end_with'){
            $query->$clause($logic[0], "not like", '%'.$logic[2]);
        }
        else if($logic[1] == 'ends_with'){
            $query->$clause($logic[0], "like", '%'.$logic[2]);
        }
    }


}
