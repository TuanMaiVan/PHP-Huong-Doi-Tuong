<?php
//1. Lớp class dùng để mô tả 1 phân hoặc toàn bộ đối tượng(nhưng không phải là đuối tương) và để khai báo nó trong php sử dụng cú pháp sau
class Name
{
    //code
}
//Name là tên của class

//2. Thuộc Tính trong class có tác dụng như các biến và hằng trong phướng pháp lập trình hướng thủ tục
// cú pháp
class Name
{
    //đối với thuộc tính động
    var $propenrtuNam;
    //đối với thuộc tính cố định(hằng)
    const $constNam = value;
}
//3. Phương thức trong class là các hành động hành vi của class đó
class  Name
{
    function methodName()
    {
        //code
    }
    //methodName là tên của phương thức trong class
}


//4.  Khởi tạo lớp class
new className;
//hoặc
new className();

//5. Truy xuất thuộc tính của class có 2 dạng
// Truy xuất trong class
 // để truy xuất các thuộc tính động trong class ta dùng từ khóa this với cú pháp this->propertyName;
// VD: truy xuất thông tin của thuộc tính name trong phương thức nói của class ConNGuoi
class ConNguoi
{
    var $name;
    var $mat;
    var $mui;
    const sochan = 2;

    function an()
    {
        //code
    }
    function noi($caunoi)
    {
        return $this->name = $caunoi;
    }
}
// còn nếu muốn truy xuất thuộc tính cố định trong class ta sử dụng 1 trong 2 cú pháp sau
self::propertyName;
//hoặc
className::propertyName;
//* Truy xuất ngoài class
//+ Đối với thuộc tính động ta sử dụng cú pháp:
$newClass = new clasName();
$newClass->propertyName;
//khuyên dùng cách thứ 2
//+ Đối vưới thuộc tính cố định(constant) ta sử dụng cú pháp:
className::propertyName;
//VD
//Khởi tạo lớp
$tai = new ConNguoi();
//gọi thuộc tính dạng động
//gọi name
$tai->name;
//gọi mui
$tai->mui;
//gọi thuộc tính cố định
ConNguoi::sochan;
//6. Truy xuất phương thức của class
//* để truy xuất phương thức của class khi mà ta vẫn đang ở trong class thì chúng ta sử dụng cú pháp sau:
$this->methodName();
//Hoặc nếu có các argument
$this->methodNam(argument);
//VD
class ConNguoi
{
    var $name = 'aa';
    var $mat;
    var $mui;
    const sochan = 2;

    function an()
    {
        //code
    }

    function noi()
    {
        return $this->getSoChan();
    }

    function di()
    {
        //code
    }

    function getSoChan()
    {
        return self::sochan;
    }
}
?>