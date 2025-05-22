# Skupszop - zadanie rekrutacyjne

## O projekcie

## Wymagania

PHP 8.2 oraz nodejs >= 18. Rozszerzenie: php-sqllite3.

## Uruchomienie

1. Pobierz repozytorium.
2. Utwórz bazę danych SQL Lite: `touch database/database.sqlite`
3. Uruchom migracje.
4. Zbuduj biblioteki UI: `npm install && npm run dev`
5. Uruchom aplikacje.
6. Uruchom testy - powinny zwrócić 10 błędów. Komenda: `php artisan test`

## Zadania:

1. Dodanie zapisywania pliku dla książki edycji książki. Uruchom test: `php artisan test --filter=TaskOneTest`
2. Popraw test na sprawdzanie usuwania książek. Uruchom test: `php artisan test --filter=TaskTwoTest`
3. Dodaj test ma usuwanie autora. Uruchom test: `php artisan test --filter=TaskThreeTest`
4. Dodaj widok do edycji autora. Uruchom test: `php artisan test --filter=TaskFourTest`
5. Dodaj logikę do kontrolera edycji atrybutów. Uruchom test: `php artisan test --filter=TaskFiveTest`
6. Napraw błąd z listowaniem atrybutów. Uruchom test: `php artisan test --filter=TaskSixTest`
7. Utwórz global scope, który pobierze kategorie z popularnością większą od 2. Uruchom test: `php artisan test --filter=TaskSevenTest`
8. Dodaj route model binding po slug-u w autorze. Uruchom test: `php artisan test --filter=TaskEightTest`
9. Utwórz role i przypisz je użytkownikom. Uruchom test: `php artisan test --filter=TaskNineTest`
10. Stwórz, wykorzystaj i uruchom seeder dla modelu Atrybuty. Uruchom test: `php artisan test --filter=TaskTenTest`

## Początkowy efekt

```
  Tests:    10 failed (10 assertions)
  Duration: 3.73s
```

## Zamierzony efekt

```
   PASS  Tests\Unit\ExampleTest
  ✓ that true is true                                                                                                                                                                                                                                        0.10s  

   PASS  Tests\Feature\TaskEightTest
  ✓ authors model will use slug as route model binding                                                                                                                                                                                                       1.61s  

   PASS  Tests\Feature\TaskFiveTest
  ✓ can see book edit page                                                                                                                                                                                                                                   0.07s  

   PASS  Tests\Feature\TaskFourTest
  ✓ can see author edit page                                                                                                                                                                                                                                 0.01s  

   PASS  Tests\Feature\TaskNineTest
  ✓ categories are created properly                                                                                                                                                                                                                          0.04s  

   PASS  Tests\Feature\TaskOneTest
  ✓ can see unknown binding type text                                                                                                                                                                                                                        0.06s  

   PASS  Tests\Feature\TaskSevenTest
  ✓ can see pagination links                                                                                                                                                                                                                                 0.01s  

   PASS  Tests\Feature\TaskSixTest
  ✓ example                                                                                                                                                                                                                                                  0.03s  

   PASS  Tests\Feature\TaskTenTest
  ✓ attributes are created properly                                                                                                                                                                                                                          0.01s  

   PASS  Tests\Feature\TaskThreeTest
  ✓ can delete author                                                                                                                                                                                                                                        0.01s  

   PASS  Tests\Feature\TaskTwoTest
  ✓ book can be deleted                                                                                                                                                                                                                                      0.01s  

  Tests:    11 passed (15 assertions)
  Duration: 2.81s
```
