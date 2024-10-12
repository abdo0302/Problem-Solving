class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $parm1=$x;
        $parm2=strrev($x);
        if($parm1==$parm2){
            return true;
        }else{
            return false;
        }
    }
}