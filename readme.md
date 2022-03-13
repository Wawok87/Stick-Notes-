# Zaprojektowanie wstępnego układu aplikacji - layout

* PSR-12 - https://www.php-fig.org/psr/psr-12/

## Struktura katalogów

<pre>
project_dir
  ├── src
  │   └── ...
  ├── templates
  │   ├── pages
  │   │   └─ ...
  │   └ ...
  └ index.php
</pre>

## Cel

Stworzymy szablon html z wydzielonymi miejscami na:

* nagłówek
* menu
* kontent strony

Dodamy strony:

* formularz dodawania nowej notatki
* lista notatek - czyli strona główna

Zlinkujemy strony ze sobą.

## Krok po kroku

1. wyniesienie funkcji debagujących do osobnego pliku
   * Importowanie plików
     * include, include_once
     * require, require_once
2. połączenie html i php
3. wyniesienie html do osobnych plików
4. utworzenie klasy widoku

# Obsługa dodawania nowej notatki i optymalizacja

* zaczynamy pracować na przygotowanym szablonie graficznym, pliki do ściągnięcia

## Cel

Obsługa dodawania nowej notatki.

## Krok po kroku

1. utworzenie formularza do dodawania notatki

2. obsługa danych przesłanych przez formularz
    * omówić $_GET i $_POST
    * bezpieczeństwo - dane pochodzące z zewnątrz, eskejpowanie, XSS

3. wyświetlenie danych przesłanych przez formularz

4. utworzenie klasy kontrolera - refactoring