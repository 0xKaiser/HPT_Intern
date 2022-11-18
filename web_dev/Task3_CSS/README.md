
> *Day 13/11/2022*

> *Make by Thế Vương - @kaiser*

> *Task 1: HTML*	

> *Mentor: anh Đức - @d3ck9*

# CSS
Là ngôn ngữ định dạng cho các siêu văn bản(ví dụ HTML,... ), có vai trò làm đẹp trang.

## Cấu trúc
Vùng chọn 
{
	thuộc tính: giá trị
	thuộc tính: giá trị
	....
}

## Cách chèn
Có 2 cách: Inline Styles, External Styles

## Vùng chọn
1 đoạn CSS có thể áp dụng nhiều vùng chọn khác nhau
Các kiểu vùng chọn:
- Chọn theo tên thẻ: `p{}, a{}`.
- Chọn theo id: **#id{}**
- Chọn theo class: **.class{}**
- Chọn thứ cấp: chọn luôn tất cả phần tử con
- Chọn thứ cấp liền nhau: chỉ lấy phần tử con sau phần tử mẹ.

## Các đơn vị đo lường
Đơn vị tuyệt đối: px (điểm ảnh), pt (72 pt = 1 inch),...
Đơn vị tương đối: %, em (tham chiếu theo font size của phần tử mẹ), rem (tham chiếu font size của html),...

## Các thuộc tính 
text-align: (Căn lề)
text-decoration: (thêm gạch trên, dưới hoặc giữa văn bản)
text-indent: (tạo khoảng trống bên tay trái văn bản)
text-shadow: màu x y size, ... (đổ bóng)
text-transform:   (hiển thị in hoa, thường)

## Trang trí chữ
font-family: tên font 1, tên font 2(nếu không có 1),... (font chữ)
font-style: (in nghiêng)
font-weight: số (làm chữ đậm hoặc nhạt hơn, từ 100=>900)
color: tên màu hoặc mã màu như #452b6f (màu chữ)

## Box Model
Là kỹ thuật để tinh chỉnh lại các phần tử khối 
Gồm 4 thành phần:
- Margin: lề bên ngoài
- Border: phần viền
- Padding: lề bên trong
- Content: nội dung bên trong

Bố cục:

![bocuccss](https://upload.wikimedia.org/wikipedia/commons/7/7a/Boxmodell-detail.png)

## Box sizing
Chỉnh lại kích thước của khối, phần content sẽ được tùy chỉnh lại sao cho khớp

## Thêm nền cho block

## Float và Clear Float
Khi thực hiện Float thì đối tượng sẽ nhảy ra ngoài container
Giải pháp: 
- Tìm đến phần tử mẹ và thêm thuộc tính overflow: auto
- Hoặc thêm class con vào container rồi thêm thuộc tính clear: both vào class con vừa tạo ở file CSS

## Reset CSS
File HTML thông thường được hiển thị bởi cài đặt của trình duyệt
Giải pháp: đưa về giá trị mặc định bằng lệnh hoặc 1 số bộ clear CSS như normalize.css hoặc reset.css(nếu có ý định viết lại css cho toàn bộ)

## Trang trí danh sách

## Thuộc tính Display
Dùng để thay đổi thuộc tính hiển thị của phần tử.
vd: từ phần tử **inline => block** hoặc **block => inline**, hoặc tạo danh sách từ cái div

## Thuộc tính Position
1. relative: căn chỉnh đối tượng tùy ý, ở dưới đối tượng khác
2. absolute: căn chỉnh đối tượng theo cha của nó( relative or absolute)  
3. fixed: giữ đối tượng cố định khi scroll màn hình
4. static: đưa phần tử về vị trí mặc định

## Pseudo Class 
Dùng để viết trạng thái của phần tử.

VD: trạng thái khi rê chuột vào

Một sô Pseudo Class thông dụng:
-   `:hover` – Chọn trạng thái khi rê chuột vào một phần tử.
-   `:visited` – Được sử dụng cho liên kết, chọn liên kết khi đã được truy cập (dựa vào History trên trình duyệt).
-   `:link` – Được sử dụng cho liên kết, chọn liên kết khi chưa nhấp vào.
-   `:active` – Chọn phần tử khi họ chọn/nhấp vào.


***

