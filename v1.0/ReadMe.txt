	K vytvoøení práce byly použity programy Apache NetBeans IDE 11.2 a XAMPP v.3.2.4
	
	Adresáø obsahuje vèetnì tohoto souboru, ještì pìt dalších.
	
	Soubor s pøíponou sql vyexportovaný z phpMyAdmin obsahuje samotnou databázi. V ní je jedna tabulka se ètyømi sloupci. Ty jsou id, jméno knihy, jméno autora a rok vydání. Do tabulky jsem vložil 10 vzorových knih.
	
	Zbytek souborù už jsou pøímo spustitelné php skripty. Musí zde upozornit, že každý z nich obsahuje promìnné (konkrétnì Username, Password, Servername), které je potøeba zmìnit, aby skripty mohli fungovat na konkrétním serveru.
	
	Soubory DatabaseCreate.php a TableCreate.php dìlají pøesnì to, co øíkají jejich názvy.
	
	Soubor Form.php slouží k vkládání knih do databáze. Samozøejmì jsou zde použity funkce na odchytávání nevalidních øetìzcù. V roce vydání je oèekáván ètyømístný øetìzec (0999,1999,-999,9999, atd.). Jméno autora a knihy je potom volnìjší. Je oèekáván øetìzec o délce 1 až 30 znakù.
	
	Soubor Select.php je výpis z databáze. Nad každým sloupcem je tlaèítko, které ho jednak popisuje a potom také slouží k seøazení podle daného sloupce.

