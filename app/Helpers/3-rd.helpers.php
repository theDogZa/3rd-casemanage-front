<?php
function _h_formatDateThai($strDate)
{
    $strYear = date("Y",strtotime($strDate))+543;
    $strMonth= date("n",strtotime($strDate));
    $strDay= date("j",strtotime($strDate));
    $strHour= date("H",strtotime($strDate));
    $strMinute= date("i",strtotime($strDate));
    $strSeconds= date("s",strtotime($strDate));
    $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
    $strMonthThai=$strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear $strHour:$strMinute";
}

function _h_formatDate($DateTime)
{
    $newdate = '';
    if($DateTime){
        $newdate = date("d/m/Y H:i", strtotime($DateTime));
    }
    return $newdate;
}

function _h_LabelStatus($strStatus)
{
    $newStatus = '';
    if($strStatus){
        switch ($strStatus) {
            case "Done":
                $labelColor = 'success';
                $defaultTagI = 'fa-ban';
                break;
            case "Reject":
                $labelColor = 'danger';
                $defaultTagI = 'fa-check';
                break;
            case "Claim":
                $labelColor = 'warning';
                $defaultTagI = '';
                break;
            case "Reassign":
                $labelColor = 'info';
                $defaultTagI = '';
                break;
            case "Assign":
                $labelColor = 'primary';
                $defaultTagI = '';
                break;
            case "Stop":
                $labelColor = 'alt-warning';
                $defaultTagI = '';
                break;
            case "Closed":
                $labelColor = 'secondary';
                $defaultTagI = '';
                break;
            default:
                $labelColor = 'primary-dark';
                $defaultTagI = '';
        }
        $newStatus = '<span class="p-2 badge badge-'.$labelColor.'">' .$strStatus. '</span>';
    }

    return $newStatus;
}

?>