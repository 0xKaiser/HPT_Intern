
> *Day 21/12/2022*

> *Make by Thế Vương - @kaiser*

> *Task: PHP*	

> *Mentor: anh Đức - @d3ck9*

# PHP 
là một ngôn ngữ lập trình kịch bản được chạy ở phía server nhằm sinh ra mã html trên client. Chạy trên môi trường Webserver và lưu trữ dữ liệu thông qua hệ quản trị cơ sở dữ liệu nên PHP thường đi kèm với Apache, MySQL và hệ điều hành Linux (LAMP).

Để code PHP, cần phải cài đặt XAMPP. Trong đó có sẵn apache + my sql, nhưng người dùng vẫn có thể dùng database khác nếu muốn. 

Nếu muốn tương tác với SQL Server cần tiến hành cài đặt SQLSRV và ODBC với phiên bản tương thích từ microsoft. Câu lệnh tương tác có thể dùng PDO::SQLSRV hoặc SQLSRV_Statement 

## Biến
Có 7 kiểu dữ liệu: 
-   Kiểu INT
-   Kiểu Boolean
-   Kiểu Số Thực (float, double)
-   Kiểu Chuỗi
-   Kiểu Mảng (array)
-   Kiểu NULL
-   Kiểu Đối Tượng (object)
Khai báo biến bắt đầu bằng &name=value;
Tương tự python

## Câu lệnh điều khiển
### If - else

`if` `(``$bieuthuc``){`

`// Những Câu Lệnh 1;`

`}` `else``{`

`// Những câu lệnh 2;`

`}`

## Vòng lặp
### While
`while` `(``$condition``) {`

`// dòng lệnh`

`}`

### foreach
`foreach` `(``$array` `as` `$key` `=>` `$value``){`

`// Các dòng lệnh`

`}`
Trong đó `$array[$key] = $value`

### for
`for` `(``$i` `= 9,` `$count` `= 10;` `$i` `<=` `$count``;` `$i``--){`

`echo` `$i` `.` `' - '``;`

`}`

## Dừng chương trình
break dùng để thoát vòng lặp

continue sẽ bỏ qua những đoạn code bên dưới nó và nhảy qua vòng lặp kế tiếp

chương trình sẽ dừng ngay lập tức và những đoạn code bên dưới die và exit

## Function 

`function` `func_name(``$vars``)`

`{`

`// các đoạn code`

`return` `$val``;`

`}`

Tương tự python

## Get và Post
Đều dùng để gửi dữ liệu lên Server

Post gửi dữ liệu ko nhìn thấy bằng mắt thường, thông qua 1 form

Get gửi dữ liệu trong qua dữ liệu kèm theo trong URL


///






