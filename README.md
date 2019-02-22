# DNI
Package para consultar numero de DNI de Peru

### Metodo de Uso
```sh
<?php
	user rubensaid/DNI
	
	$person = DNI::find($dni);
?>
```
### Error en busquedas / sin resultados
```sh
<?php
	if(!$person)
	{
		echo "No se encontraron datos";
	}
?>
```

### Datos que se obtienen
```sh
<?php
	...
	$person = DNI::find($dni);
	
	$person->dni;
	$person->cui;
	$person->paterno;
	$person->materno;
	$person->nombres;
?>
```

### Instalacion mediante composer
```sh
	composer require "rubensaid/dni"
```

```sh
<?php
    require ("./vendor/autoload.php");
    ...
?>
```

### Pre-requisitos
```sh
- PHP 5.2.0 o superior
```
