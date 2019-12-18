<?php

class SplMinHeap
{
    protected $compare;
    protected $value1;
    protected $value2;
    protected $arr;

    protected function __construct($arr, $value1, $value2)
    {
        $this->$arr = $arr;
        $this->$value1 = $value1;
        $this->$value2 = $value2;
    }
    public function count($arr)
    {
        // trả về độ dài của mảng
        return count($arr);
    }
    public function current($arr)
    {
        // xuất phần tử ở chỉ số index = 0;
        current($arr);
    }
    public function extract($arr)
    {
        // dùng thay đổi tên của Key trong mảng và 
        // trả về số lượng pt trong mảng
        extract($arr, EXTR_PREFIX_SAME, "dup");
    }
    public function insert($arr, $value)
    {
        // chèn 1 phàn tử vào mảng
        // 3 là chèn vào $arr[index] = 3
        // value là pt dc chèn vào

        array_splice($arr, 3, 0, $value);
    }
    public function isCorrupted($arr)
    {
        // kiểm tra có phải là Mảng không
        // trả về true và flase
        return is_array($arr);
    }
    public function isEmpty($arr)
    {
        // kiểm tra rỗng hay không 
        // trả về true nếu rỗng và flase là không rỗng
        return empty($arr);
    }
    public function key($arr)
    {
        // trả về giá trị key của mảng ở 
        // vị trí index đầu tiên
        key($arr);
    }
    public function next()
    {
        // xuất phần tử tiếp theo ở vị trí đầu tiên của mảng
        next($arr);
    }
    public function recoverFromCorruption()
    {
    }
    public function rewind($arr)
    {
        // hàm để tua lại vị trí con trỏ 
        rewind($arr);
    }
    public function top($arr,$key)
    {
        // thay đổi vị trí key ở vị trí $key
        // lên vị trí key đầu tiên
        
        if(isset($arr[$key]))
        $arr = [$key =>$arr[$key]] + $arr;
    }
    public function valid($arr)
    {
        // kiểm tra có hợp lệ không
        // có trả về true , ko trả về flase
       return $arr->valid();
    }
}
