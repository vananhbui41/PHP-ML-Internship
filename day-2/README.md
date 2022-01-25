## Bài toán đấu giá

Giả sử trong 1 sàn đấu giá, có một sản phẩm đang có giá trị **P**, khi một người muốn dành quyền mua thì họ phải trả thêm một khoản tiền gọi lại bước giá **S**

=> Tổng số tiền mua người đó bỏ ra để mua sản phẩm sẽ là **P + S**

Giá trị của bước giá **S** thì sẽ phụ thuộc vào giá trị hiện tại **P** của sản phẩm trong một khoản giá nhất định

```
VD: Ở sàn giao dịch người ta quy định là nếu giá trị của sản phẩm P >= 100 và P < 300 thì bước giá sẽ là 40
Thì trong trường hợp sản phẩm đang có giá trị là 210 thì nếu một người muốn mua thì phải bỏ ra số tiền là 210 + 40 = 250
Nếu vẫn có thêm một người mua nữa khi đó người mới sẽ phải bỏ ra số tiền là 250 + 40 = 290
```

Giả xử trong sàn đấu giá chỉ có 2 người A và B

có các bước giá tương ứng như hình:
1. **100 <= P < 300** thì bước giá là **40**
1. **300 <= P < 500** thì bước giá là **60**
1. **500 <= P < 1000** thì bước giá là **80**
1. **1000 <= P < 1500** thì bước giá là **120**
1. **1500 <= P < 3000** thì bước giá là **150**

Trước khi tham gia giao dịch thì người A đã nói cho người B rằng tối đa số tiền A có thể bỏ ra là **1200**

Vậy số tiền ít nhất mà B cần phải bỏ ra là bao nhiều ?


Viết hàm sau:
```php
function calcMinPrice($price, $stepPrices, $rivalryPrice);
```
Trong đó:

- **$price**: là giá của sản phẩm VD: 210
- **$stepPrices**: một mảng với key là giá khởi điểm của bước giá và giá trị là bước giá, VD:
```php
$stepPrices = [
    100  => 40,
    300  => 60,
    500  => 80,
    1000 => 120,
    1500 => 150,
];
```
- **$rivalryPrice**: Số tiền tối đa mà đối thủ có thể bỏ ra. VD: 1200

![alt text](https://gitlab.com/dungnm11/ltt-intern-php-exercises/-/raw/images/images/day-2-daugia.png ":)")

---
## Bài dự tính deadline

Bạn được giao một công việc làm trong **M** ngày công. Nhưng không phải hôm nào cũng là ngày làm việc, VD: như thứ 7, CN, hoặc một ngày nghỉ lễ nào đó làm cho số ngày thực tệ bạn để hoàn thành phải nhiều hơn số ngày công **M** được giao.

Chẳng hàn như ở hình dưới, công việc được giao làm trong **5 ngày** nhưng ở ngày thứ **2**, **3** và **6** bạn được nghỉ

![alt text](https://gitlab.com/dungnm11/ltt-intern-php-exercises/-/raw/images/images/day-2-deadline.png ":)")

Nên deadline thực tế của công việc đấy là ngày thứ **8**

---
Viết hàm sau:
```php
function calcDeadline($manday, $calendar);
```

Trong đó:
- **$manday**: là số ngày công cần để thực hiện xong công việc, VD: 5
- **$calendar**: một mảng các Boolean đánh dấu xem là ngày nào được nghỉ (lịch có thể ngắn hoặc dài hơn deadline)
```php
$calendar = [
    false, // tương đương với ngày 0
    false, // tương đương với ngày 1
    true,  // tương đương với ngày 2
    true,  // tương đương với ngày 3
    false, // tương đương với ngày 4
    false, // tương đương với ngày 5
    true,  // tương đương với ngày 6
    false, // tương đương với ngày 7
];
```

Hàm sẽ trả về ngày deadline (ngày công việc đã được thực hiện xong).

Nếu lịch quá ngắn không thể tính được deadline thì hãy trả về **false**

> Bonus: hãy thử viết mà không dùng vòng lặp (for, while, foreach, v.v...)
