	K�vytvo�en� pr�ce byly pou�ity programy Apache NetBeans IDE 11.2 a XAMPP v.3.2.4
	
	Adres�� obsahuje v�etn� tohoto souboru, je�t� p�t dal��ch.
	
	Soubor s�p��ponou sql vyexportovan� z�phpMyAdmin obsahuje samotnou datab�zi. V�n� je jedna tabulka se �ty�mi sloupci. Ty jsou id, jm�no knihy, jm�no autora a rok vyd�n�. Do tabulky jsem vlo�il 10 vzorov�ch knih.
	
	Zbytek soubor� u� jsou p��mo spustiteln� php skripty. Mus� zde upozornit, �e ka�d� z�nich obsahuje prom�nn� (konkr�tn� Username, Password, Servername), kter� je pot�eba zm�nit, aby skripty mohli fungovat na konkr�tn�m serveru.
	
	Soubory DatabaseCreate.php a TableCreate.php d�laj� p�esn� to, co ��kaj� jejich n�zvy.
	
	Soubor Form.php slou�� k�vkl�d�n� knih do datab�ze. Samoz�ejm� jsou zde pou�ity funkce na odchyt�v�n� nevalidn�ch �et�zc�. V�roce vyd�n� je o�ek�v�n �ty�m�stn� �et�zec (0999,1999,-999,9999, atd.). Jm�no autora a knihy je potom voln�j��. Je o�ek�v�n �et�zec o d�lce 1 a� 30 znak�.
	
	Soubor Select.php je v�pis z�datab�ze. Nad ka�d�m sloupcem je tla��tko, kter� ho jednak popisuje a potom tak� slou�� k�se�azen� podle dan�ho sloupce.

