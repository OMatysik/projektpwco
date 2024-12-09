1. Cel projektu
Celem projektu było stworzenie aplikacji typu CRUD (Create, Read, Update, Delete), wdrożonej w chmurze z wykorzystaniem potoku CI/CD, zapewniając:

Bezpieczeństwo danych (szyfrowanie, HTTPS).
Wdrożenie na maszynach wirtualnych lub w kontenerach Docker.
Architekturę mikroserwisową.
Automatyczne testy w ramach CI/CD.

2. Opis aplikacji
Aplikacja to prosta lista zadań, która pozwala użytkownikom:

Dodawać nowe zadania (Create),
Przeglądać istniejące zadania (Read),
Edytować zadania (Update),
Usuwać zadania (Delete).

Technologie:
Backend: PHP.
Baza danych: MySQL hostowana w Azure.
Frontend: HTML, Bootstrap.
CI/CD: GitHub Actions.

3. Funkcjonalności
   
CRUD:
Tworzenie: Formularz dodawania elementów (nazwa, opis).
Odczyt: Wyświetlanie listy elementów w tabeli.
Aktualizacja: Edycja elementów za pomocą modala.
Usuwanie: Usuwanie elementów przy pomocy przycisku.

Bezpieczeństwo:
Połączenie z bazą danych przez szyfrowany kanał (Azure MySQL).
Szyfrowanie haseł (funkcja hash() dla haseł użytkownika, jeśli była by implementacja logowania).
Obsługa wejścia użytkownika z htmlspecialchars().

Mikroserwisy:
Aplikacja zbudowana w oparciu o Docker Compose, umożliwiająca komunikację między kontenerami backendu i bazy danych.


4. Wdrożenie w chmurze
Hosting:

Aplikacja wdrożona w Azure App Service.
CI/CD:

Potok CI/CD skonfigurowany w GitHub Actions.
Automatyczne budowanie i wdrażanie aplikacji na każde zatwierdzenie zmian w branchu main.

Infrastruktura jako kod:
Maszyny wirtualne lub kontenery zarządzane z użyciem Docker Compose.


6. Kluczowe pliki projektu
   
Backend:

db.php: Połączenie z bazą danych MySQL.
index.php: Logika obsługująca operacje CRUD.
delete.php i update.php: Obsługa odpowiednio usuwania i aktualizacji danych.

Frontend:
Formularz i tabela do obsługi zadań, stylizacja z użyciem Bootstrap.

Konfiguracja CI/CD:
main_projektpwco.yml: Automatyzacja budowy i wdrożenia.




