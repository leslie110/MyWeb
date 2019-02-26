<?php
class Name{
    //初始化参数,并连接数据库
    public function __construct(){
        $ini_array = parse_ini_file('mysql_db.ini',true);
        $host = $ini_array['mysql']['host'];
        $user = $ini_array['mysql']['user'];
        $pwd = $ini_array['mysql']['pwd'];
        $dbname = $ini_array['mysql']['dbname'];
        $this->db = new mysqli($host,$user,$pwd,$dbname);
        if ($this->db->connect_error){
            echo '连接数据库失败'.$this->db->connect_error;
            exit();
        }
    }

    //创建方法判断是否为空
    public function name1($arr,$user,$array)
    {
        foreach ($array as $v){
            if ($arr == '' and $user =='') {
                return 0;//判断所有为空
            }
            elseif ($arr == '') {
                return 1;//判断arr为空
            }
            elseif ($user ==  '') {
                return 2;//判断user为空
            }
            elseif (is_numeric($user)){
                return 3;//判断user是数字
            }
            elseif (strpos($v,$arr) != false ){
                return 4;//判断user是数字
            }
            else {
                return 5;//格式正确
            }

        }


    }
    //创建方法用来输入
    public function subit($arr,$user,$array){
        if ($this->name1($arr,$user,$array) == 0){
            die('您没有填写任何字段');
        }
        elseif ($this->name1($arr,$user,$array) == 1){
            die('输入内容不能为空');
        }
        elseif ($this->name1($arr,$user,$array) == 2){
            die('发表人名称不能为空');
        }
        elseif ($this->name1($arr,$user,$array) == 3){
            die('发表人名称不正确');
        }
        elseif ($this->name1($arr,$user,$array) == 4){
            die('输入内容选在敏感字符');
        }
        else{
            echo $arr.'   '.$user;
        }
    }

    //查询数据库操作
    public function ride_mysql($sql){
        $mysql_result = $this->db->query($sql);
        if ($mysql_result){
            $arr = [];
            while ($row = $mysql_result->fetch_array(MYSQLI_ASSOC)) {
                $arr[] = $row;
            }
        }
        else{
            echo $this->db->error;
        }
        // var_dump($arr);
        return $arr;
        
    }

    //插入数据库操作
    public function write_mysql($sql){
        $query = $this->db->query($sql);
        if ($query){
            echo '写入成功';
        }
        else{
            echo '写入失败'.$this->db->error;
        }
        
    }
}

?>