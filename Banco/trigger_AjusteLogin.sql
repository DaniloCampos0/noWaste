create trigger tgr_AjusteLogin
on login_est
for insert
as
begin
	declare @nome_usuario VARCHAR(80),
    declare @senha CHAR(8)
    
    select @nome_usuario = nome_usuario, @senha = senha from inserted
    
    insert into login_est (nome_usuario, senha)
		VALUES (@nome_usuario, @senha);
end