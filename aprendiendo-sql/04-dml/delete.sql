# BORRAR REGISTROS

# Borra todos los registros, CUIDADO
DELETE FROM usuarios;

# Borra los registros que tengan en email admnin@admin.com
DELETE FROM usuarios WHERE email = 'admin@admin.com';
