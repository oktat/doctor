# Felhasználói dokumentáció

Páciensek nyilvántartása.

## Végpontok

|  Végpont  | Metódus | Auth | CRUD |
|-|-|-|-|
| /api/patients | GET | nem | Create |
| /api/patient?id={id} | GET | nem | Create |
| /api/newpatient | POST | igen | Create |
| /api/modpatient | PUT | igen | Update |
| /api/destpatient | DELETE | igen | Delete |

## Páciensek lekérdezése

A lekérdezés a következő végponton lehetséges:

* /api/patients

Mit kapunk, példa:

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "Gyors Ernő",
            "city": "Szeged",
            "birth": "1981-05-27"
        },
        {
            "id": 2,
            "name": "Piti Géza",
            "city": "Szeged",
            "birth": "1982-07-20"
        }
    ]
}
```

## Új páciens felvétele

Használandó végpont:
  
* /api/newpatient

Új páciens létrehozásához egy példát látunk, mit kell küldeni:

```json
{
  "name": "Gyors Ernő",
  "city": "Debrecen",
  "birth": "1981-05-21"
}
```

## Páciens frissítése

Használandó végpont:
  
* /api/modpatient

Frissített példát látunk, mit kell küldeni:

```json
{
  "id": 1,
  "name": "Gyors Ernő",
  "city": "Szeged",
  "birth": "1981-05-27"
}
```

## Páciens törlése

Használandó végpont:

* /api/destpatient

```json
{
  "id": 1
}
```
