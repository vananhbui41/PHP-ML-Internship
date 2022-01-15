-- 1.	Viết lệnh sql để có thể lấy thông tin những bản ghi của categories và số lượng items của mỗi categories đó (count items)
select categories.*, count(items.id)
	from categories left join items on categories.id = category_id
    group by categories.id;

-- 2.	Viết lệnh sql để có thể lấy thông tin những bản ghi của categories và tổng số amount của các items trong categories đó (sum items.amount)
select categories.*, sum(items.amount)
	from categories left join items 
	on categories.id = category_id
    group by categories.id;

-- 3.	Viết lệnh sql để có thể lấy thông tin những bản ghi của categories mà có ít nhất một items của nó có amount > 40
select categories.* , items.name as item_name, amount 
	from categories left join items 
	on categories.id = category_id
    where items.amount > 40 ;

-- 4.	Viết lệnh sql để xóa những categories mà đang không có items nào
SET SQL_SAFE_UPDATES = 0;
delete from categories
	where id not in (
		select id from (
			select distinct categories.id 
				from categories inner join items 
				on categories.id = category_id) as a
		);
SET SQL_SAFE_UPDATES = 1;






    

    
	
    




