LABORATORIUM 14D 

docker compose up -d - świeże utworzenie odizolowanych sieci, wolumenu danych oraz uruchomienie wszystkich kontenerów w tle z bezpiecznym wdrożeniem mechanizmu Docker Secrets. 
docker compose ps - kontrola stanu startowego usług - wszystkie procesy zostały pomyślnie uruchomione i przechodzą wstępną procedurę sprawdzania kondycji sieciowej. 
![](Zrzut%20ekranu%202026-06-02%20165949.png)

Wyświetlenie wymaganej strony startowej potwierdzające, że po przeniesieniu danych wrażliwych do sekretów serwer Nginx i interpreter PHP-FPM współpracują w pełni poprawnie. 
![](Zrzut%20ekranu%202026-06-02%20170701.png)

Pomyślne zalogowanie do serwera MySQL za pomocą bezpiecznego hasła z sekretu i zainicjalizowanie testowej bazy danych o nazwie testowa_baza. 
![](Zrzut%20ekranu%202026-06-02%20170042.png)
![](Zrzut%20ekranu%202026-06-02%20170351.png)
