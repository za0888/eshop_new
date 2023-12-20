#Start
Customer создает заказ (order) на товары (skus /stock keeping unit)
push submit button"Order is ready" and **_Confirm button_**
order to be marked as **_Pending_**

###Customer  cabinet)(or **_Order_** page)
User push submit  button"**Order is confirmed**" the skus change status from **ready** to **ordered**
Order get status _**Pending**_

###Manager cabinet
manager take order (button 'Take order') or the boss make the manager responsible for the order
Relation of  models Order and User(manager) to be established
The order get status _**processing**_
Manager  send order to mail opertor marking _**order**_ as _**Shipped**_.
 
 As soon as order is **payed** 
product(sku) would be marked as **_Archiv_** otherwise as  **_faulty_**


статусы заказа:
pending,shiped,done,failed(returned),done (product is maked as **_Archiv_**)

статусы продукта(_enum_):
- case StockProcessing='stock processing'
- case Ready = 'ready';//ready to be sold
- case Ordered = 'ordered';
- case Archiv='archiv';// after been sold
- case Faulty='faulty'; //неисправен
--------------
Продукт (SKU stock keeping unit)имеет атрибуты(цвет.вес.длина) атрибут имеет опции(красный, 2 кг,...)
сопутствующие модели Unit(штуки литры),Discont
-----------
restrictions:
order only for guests

Diffirent  prefix & dir for guests and managers and Boss
----------------
monitor for general boss:
state of orders,
state of stocks
________________
????????????????????
Managers/users and guests are different tables
for security reasons
----------------
??????????
Stock is a child of User/manager (see relations in the models

we have  stock   case Main = 'main';
                   case Order = 'order';
                 ???  case Transport = 'transport';
and each manager is a stock( after button send has been
 pressed by manager one become responsible for the product)
 So we have 2 basic stock plus number of stocks equal to nember
  of sail managers
  models Stock and User related as one to one
  Stock Product ont to many

----------------
one start page for guest
another for managers
--------------
enum OrderStatus: string
{
    case Paid= 'paid';// product mark as deleted  from stock main
    case Pending = 'pending';//stock maim
    case Processing = 'processing';//came to stock manager
    case Shipped = 'shipped';//remains in the stock manager
    case Canceled = 'canceled';//get back to the stock main
}
//
Change approuch

https://laraveldaily.com/post/laravel-e-shop-products-options-attributes-database-structure-example

about SKU
https://sendpulse.ua/ru/support/glossary/sku
