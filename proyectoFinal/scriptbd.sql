use proyecto_final;
delete from pedido;
select * from tipo_producto;
select * from usuario;
select * from producto;
select * from producto_pedido;
select * from pedido;
select * from categoria;
insert into usuario (localidad_id,provincia_id,email,roles) values(1,1,'2daaeprexp13@ieslasfuentezuelas.com','[ROLE_ADMIN]');
select * from  mensaje  order by id desc limit 1;
select u2.* from usuario u inner join usuariocontacto uc  inner join usuario u2
                                                        on (u.telefono= uc.usuario and u2.telefono=uc.usuario2)
                                                        where uc.usuario=123;
select * from mensaje where ((emisor=123 and receptor=22) or (emisor=22 and receptor=123)) and estado!=2;

delete from usuario;
delete from producto_pedido;
alter table producto_pedido add unidades int default 1;
update  usuario set carrito=null where id=5;

insert into usuario values (1,1,'$argon2id$v=19$m=65536,t=4,p=1$YjJZaTh1ck92WHEwWng5Ng$gEW77R9yBzzTXrbPZjjH8TUXlZFcDvOJEgnZjilqvP4','admin','','','2daaeperexp13@ieslasfuentezuelas.com',2,'',1,'','["ROLE_ADMIN"]',1,'{}');