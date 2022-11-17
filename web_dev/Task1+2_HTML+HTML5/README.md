> *Day 11/11/2022*

> *Make by Nguyễn Thế Vương*

> *Task 1 & 2: HTML + HTML5*	

> *Mentor: anh Đức*

# HTML 

#### Mục lục 
-	[HTML](#HTML) 
-	[1. HTML cơ bản](#1-HTML-cơ-bản)
-	[Tài liệu HTML](#Tài-liệu-HTML)
-	[1.1. Khai báo doctype](11-khai-báo-doctype)
-	[1.2. Tiêu đề](#12-tiêu-đề) 
-	[1.3. Đoạn văn ](#13-Đoạn-văn)
-	[1.4. Thẻ trống](#14-Thẻ-trống) 
-	[1.5. Liên kết](#15-Liên-kết) 
-	[1.6. Hình ảnh](#16-Hình-ảnh) 
-	[2. Thuộc tính ](#2-Thuộc-tính)
-	[3. Định dạng](#3-Định-dạng)
-	[4. Danh sách](#4-Danh-sách)
-	[5. Khối](#5-Khối)
-	[5.1. Phần tử cấp khối](#51-Phần-tử-cấp-khối)
-	[5.2. Phần tử Inline](#52-Phần-tử-Inline)
-	[5.3. Phần tử **`<div>`** ](#53-Phần-tử-div)
-	[6. Lớp](#6-Lớp)
-	[7. Id](#7-Id)
-	[8. Responsive HTML](#8-Responsive-HTML)
-	[9. Khác nhau giữa HTML và HTML5](#9-Khác-nhau-giữa-HTML-và-HTML5)


## 1. HTML cơ bản

HTML là ngôn ngữ đánh dấu tiêu chuẩn cho các trang Web. Nó là sườn của 1 web.  

Cấu trúc:  mỗi phần tử gồm phần mở đầu <> và phần kết thúc </> giống với phần đầu, không phân biệt chữ hoa thường nhưng thêm /. Trừ 1 vài thẻ là không cần phần kết thúc như `<img src="link">`, `<br>`, `<hr>`,  ... 

Ví dụ: `<h1>Lorem ipsum dolor sit amet. </h1>` là một phần tử.

### Tài liệu HTML
Tất cả các tài liệu HTML phải bắt đầu bằng khai báo loại tài liệu `<!DOCTYPE html>`.

Bản thân tài liệu HTML bắt đầu bằng `<html>`và kết thúc bằng `</html>`.

Phần `<head>`tử là vùng chứa siêu dữ liệu (dữ liệu về dữ liệu) và được đặt giữa `<html>`thẻ và `<body>`thẻ, không được hiển thị, thường xác định tiêu đề tài liệu, bộ ký tự, kiểu, tập lệnh và các thông tin meta khác. 

Phần tử `<title>`dùng để xác định tiêu đề trong thanh công cụ của trình duyệt,  cung cấp tiêu đề cho trang khi nó được thêm vào mục yêu thích, hiển thị tiêu đề cho trang trong kết quả của công cụ tìm kiếm

Phần hiển thị của tài liệu HTML nằm giữa `<body>`và `</body>`.

### 1.1. Khai báo `<!DOCTYPE>`
Khai báo `<!DOCTYPE>`đại diện cho loại tài liệu và giúp các trình duyệt hiển thị các trang web một cách chính xác.

Nó chỉ được xuất hiện một lần, ở đầu trang (trước bất kỳ thẻ HTML nào).

Khai báo `<!DOCTYPE>`không phân biệt chữ hoa chữ thường.

Khai báo `<!DOCTYPE>`cho HTML5 là:

**`<!DOCTYPE html>`**

### 1.2.  Tiêu đề 
HTML hỗ trợ 6 thẻ tiêu đề từ  `<h1> đến <h6>`

Cú pháp: **`<h1> Tittle </h1>`**

Trong đó h1 là quan trọng nhất, h6 là ít quan trọng nhất

### 1.3. Đoạn văn 
Cú pháp: ` <p> Paragraph </p>
 `
Lưu ý: HTML sẽ tự động xóa bỏ bắt kì khoảng trắng, xuống dòng thừa 

Giải pháp: Dùng phần tử `<pre>` cho văn bản được định dạng trước. Nó sẽ hiển thị bằng phông chữ có chiều rộng cố định (thường là Courier) và nó giữ nguyên cả khoảng trắng và ngắt dòng

Ví dụ: 

`<pre>  `

Seid ihr das Essen? 

Nein, wir sind der Jäger!

Nhìn                    nguy       hiểm               chưa :)))

`</pre>`

### 1.4. Thẻ trống
Có thể chèn thể trống bằng `<br>` có chức năng ngắt dòng mà không bắt đầu đoạn mới. Hoặc `<hr>` để ngắt ngang trang. 

Ví dụ: **`<h1>Lorem ipsum <br> dolor sit amet. </h1>`**

### 1.5. Liên kết
Liên kết được xác định bằng thẻ: 
*`<a href="Đặt link ở đây">Tittle của link</a>`*

Ví dụ: *`<a href="https://www.youtube.com/watch?v=i4wfRU40Avs&list=PLl4nkmb3a8w135_M4YRPzYD9_6tERz3ce&index=3">Học HTML cơ bản - Tạo tài liệu Web - HTML </a>`*

Sẽ được văn bản siêu liên kết như dưới:
[Học HTML cơ bản - Tạo tài liệu Web - HTML](https://www.youtube.com/watch?v=i4wfRU40Avs&list=PLl4nkmb3a8w135_M4YRPzYD9_6tERz3ce&index=3) 

### 1.6. Hình ảnh
Hình ảnh được khai báo bằng: **`<img src="Đường dẫn(path) của ảnh"  alt="Tên thay thế nếu ảnh không hiển thị được"  width="104"  height="142">`**

Ví dụ: **`<img src="https://4kwallpapers.com/images/walls/thumbs_2t/6604.jpg  alt="ahihi :))"  width="512"  height="459">`**

Sẽ được kết quả:  :))))))

<img src="https://4kwallpapers.com/images/walls/thumbs_2t/6604.jpg" alt="ahihi :))" width="600" height="440">

## 2. Thuộc tính 
Thuộc tính: Các phần tử đều có thuộc tính, được chỉ định trong thẻ bắt đầu, không yêu cầu tên thuộc tính chữ thường. 

Ví dụ: `<h1 style="color:red; font-size:60px;" id="Tieude">Lorem ipsum dolor sit amet. </h1>`

Tất cả các thuộc tính có thể được viết bằng chữ hoa hoặc chữ thường như **title** hoặc **TITLE** .

Một vài thuộc tính phổ biến:
-   Thuộc `href`tính `<a>`chỉ định URL của trang mà liên kết chuyển đến
-   Thuộc `src`tính `<img>`chỉ định đường dẫn đến hình ảnh được hiển thị
-   Các thuộc tính `width`và cách cung cấp thông tin kích thước cho hình ảnh`height``<img>`
-   Thuộc `alt`tính của `<img>`cung cấp văn bản thay thế cho hình ảnh
-   Thuộc `style`tính được sử dụng để thêm kiểu vào một phần tử, chẳng hạn như màu sắc, phông chữ, kích thước, v.v.
-   Thuộc `lang`tính của `<html>`thẻ khai báo ngôn ngữ của trang Web
-   Thuộc `title`tính xác định một số thông tin bổ sung về một phần tử

**Thuộc tính lang:** 
Phải luôn bao gồm "lang" thuộc tính bên trong `<html>`thẻ, để khai báo ngôn ngữ của trang Web. Điều này có nghĩa là để hỗ trợ các công cụ tìm kiếm và trình duyệt.
Để chỉ định trang web dùng Tiếng Việt:		**`<html lang="utf-8">`**

**Thuộc tính Style:**
- Nền: `<body style="background-color:powderblue;">`
- Màu chữ:  `<h1 style="color:blue;">This is a heading</h1>`
- Font: `<p style="font-family:courier;">This is a paragraph.</p>`
- Size: `<h1 style="font-size:300%;">This is a heading</h1>`
- Căn chỉnh(Text Alignment): `<p style="text-align:center;">Centered paragraph.</p>`

## 3. Định dạng 
Các phần tử định dạng được thiết kế để hiển thị các loại văn bản đặc biệt:

-   `<b>`- Chữ in đậm
-   `<strong>`- Văn bản quan trọng, nội dung in đậm
-   `<i>`- Văn bản in nghiêng, thường được sử dụng để chỉ ra một thuật ngữ kỹ thuật, một cụm từ từ ngôn ngữ khác, một ý nghĩ, một tên tàu.
-   `<em>`- Đoạn văn bản được nhấn mạnh, in nghiêng
-   `<mark>`- Văn bản được đánh dấu
-   `<small>`- Văn bản nhỏ hơn
-   `<del>`- Văn bản đã xóa, gạch ngang giữa chữ
-   `<ins>`- Đã chèn văn bản, gạch dưới 
-   `<sub>`- Chỉ số dưới, H<sub>2</sub>0
-   `<sup>`- Văn bản siêu cấp, n<sup>2</sup>

## 4. Danh sách

Gồm 2 loại chính danh sách có thứ tự và không theo thứ tự:

Danh sách có thứ tự: 

`<ol>`

 ` <li>Coffee</li>`
 
`  <li>Tea</li>`

`  <li>Milk</li>`

`</ol> `

Danh sách không thứ tự:

`<ul>`

  `<li>Coffee</li>`
  
  `<li>Tea</li>`
  
  `<li>Milk</li>`
  
`</ul> `

## 5. Khối và phần tử inline
### 5.1. Phần tử cấp khối 
Phần tử cấp khối luôn bắt đầu trên **một dòng mới** và trình duyệt sẽ **tự động thêm một số khoảng trắng (lề) trước và sau phần tử**.

Một phần tử cấp khối luôn chiếm toàn bộ chiều rộng có sẵn (trải dài sang trái và phải hết mức có thể).

Hai phần tử khối thường được sử dụng là: `<p>` và `<div>`.

- Phần `<p>`tử xác định một đoạn văn trong tài liệu HTML.

- Phần `<div>`tử xác định một bộ phận hoặc một phần trong tài liệu HTML.

Ví dụ: 
`<div style="border: 1px solid black">1 khối trong div</div>`

### 5.2. Phần tử Inline
Phần tử Inline là 1 phần tử **không bắt đầu trên dòng mới** mà chỉ chiếm 1 chiều rộng vừa đủ. `<a>, <br>, <i>, <img>, <strong>, <sub>, <sup>,...`  là các phần tử Inline.

Ví dụ: 
**`<h1>Lorem ipsum dolor <span style="border: 1px solid black">phần tử Inline</span> sit amet. </h1>`**

### 5.3. Phần tử **`<div>`** 
Phần tử  **`<div>`** thường được sử dụng làm vùng chứa cho các phần tử HTML khác.

Phần `<div>`tử không có thuộc tính bắt buộc, nhưng `style`, `class`và `id`là thông dụng.

Khi được sử dụng cùng với CSS, `<div>`phần tử có thể được sử dụng để tạo kiểu cho các khối nội dung:

Ví dụ:

`<div style="background-color:green; color:blue; padding:20px;">  `

`<h2>Mệt quá nên copy vại :)))</h2>  `

`<p>London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>  `

`</div>`

## 6. Lớp
Thuộc tính `class` thường được sử dụng để trỏ đến tên lớp trong biểu định kiểu. Nó cũng có thể được JavaScript sử dụng để truy cập và thao tác các phần tử có tên lớp cụ thể.

Một phần tử có thể có nhiều lớp tách nhau bằng khoảng. Ví dụ: <div canary = "animal bird"> nghĩa là canary vừa thuộc lớp animal cũng vừa thuộc lớp bird.

Các phần tử HTML khác nhau có thể chia sẻ cùng một lớp, có thể dùng trên bất kì phần tử nào

Tên lớp có phân biệt hoa thường

Ví dụ:
`	<!DOCTYPE html>  `

`	<html>  `

`	<head>  `

`	<style>  `

`	.menu{  `
	background-color:  blue;  
	color:  white;  
	border:  2px solid yellow;  
	margin:  10px;  
	padding:  30px;  
	}  
	
`	</style>  `
`	</head>  `
`	<body>  `

`	<div class="menu">  `

`	<h2>Drink</h2>`

`	<ol>`

`	<li>Coffee</li>`

`	<li>Tea</li>`

`	<li>Milk</li>`

`	</ol>`

`	</div>`


`	<div style="text-align:center"; class="menu">  `

`	<h2>Food</h2>`

`	<ul style="text-align:center";>`

`		<li>Rice</li>`

`		<li>Fish</li>`

`		<li>Meat</li>`

`	</ul>`

`	</div>`


`	<div class="city">  `

`	<h2>Tokyo class = "menu"</h2>  `

`	<p>Tokyo is the capital of Japan.</p>  `

`	</div>  `
`	</body>  `
`	</html>`

## 7. Id

Thuộc tính HTML `id` được sử dụng để chỉ định một id duy nhất cho một phần tử HTML.

Bạn không thể có nhiều hơn một phần tử có cùng một id trong một tài liệu HTML.

Tên Id phân biệt hoa thường. Phải chứa ít nhất 1 kí tự, không bắt đầu bằng số và không chứa khoảng trắng.

## 8. Responsive HTML
Responsive HTML là tạo ra các trang web tự động điều chỉnh các kích thước màn hình và khung nhìn khác nhau sao cho đẹp mắt trên các thiết bị.

### Đặt chế độ xem

**`<meta name="viewport"  content="width=device-width, initial-scale=1.0">`**
### Dùng Viewport

 Viewport là kích thước cửa sổ trình duyệt. 1vw = 1% chiều rộng khung nhìn. Nếu khung nhìn rộng 50cm, 1vw là 0,5cm.
 
 Ví dụ: 
`<h1 style="**font-size:10vw**">Hello World</h1>`

## 9. Khác nhau giữa HTML và HTML5

|Đặc điểm         |HTML      |HTML5 |
|-------------------|-----------------------|-------------------|
| Định nghĩa       			|Ngôn ngữ đánh dấu siêu văn bản được dùng để phát triển website| Phiên bản mới nhất của HTML, bổ sung Markup để mô tả cấu trúc và nội dung website|
| Tương thích trình duyệt    |Tương thích với tất cả trình duyệt nhưng chỉ hoạt động tốt trong các trình duyệt cũ| Trong HTML5, chúng ta có nhiều thẻ mới và bỏ đi một số thẻ. Vì thế, chỉ có một số trình duyệt hỗ trợ hoàn toàn HTML5.|
|Hỗ trợ đa phương tiện       |Không hỗ trợ video và âm thanh| Tích hợp sẵn các chức năng hỗ trợ video và âm thanh|
|Storage 	  				 |Dùng bộ nhớ Cache trên trình duyệt làm bộ nhớ tạm.| Hỗ trợ Application cache, SQL Database, Web storage phục vụ cho việc lưu trữ. <br> Ngoài ra, có thể chạy JavaScript thông qua JS API phục vụ sẵn cho việc lưu trữ.|
|Đồ họa						| Đồ họa vector trong HTML phải dùng Sliver light, Adobe Flash, VML... | Đồ họa vector trong HTML5 hỗ trợ mặc định với Canvas và SVG|
|Giao tiếp					| Không hỗ trợ Web Socket cho việc giao tiếp giữa Client với Server mà dùng Streaming và Long pooling  | Hỗ trợ Web Socket cho việc giao tiếp song song giữa Server và Client.|
|Đa luồng					|Giao diện tương tác với user và JS trong cùng luồng. Dẫn đến hiệu suất trang Web thấp.| JS Web Worker API cho phép JS(chạy trong nền) và UI broswer chạy trên các luồng khác nhau|
|Thẻ applet					| Dùng để hiển thị các applet và thẻ đối tượng giới thiệu ?? | Đã bị xóa|
|Chữ viết tắt | `<acronnym>` | `<abbr>`|
|`<table>` | thuộc tính border chỉ có 0 và 1 | có nhiều thuộc tính hơn|

 - Tổng kết: HTML5 sẽ giúp ích cho các lập trình viên phát triển website vì nó cung cấp rất nhiều khả năng như hỗ trợ video và âm thanh, các thẻ mới ngữ nghĩa tốt hơn, nhiều chức năng hơn, có nhiều thông số kỹ thuật hơn. Mặt khác bản cập nhật HTML5 trong tương lai sẽ tập trung vào vấn đề bảo mật.
 
***
***
