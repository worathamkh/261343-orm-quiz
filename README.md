# 261343-orm-quiz

## Installation

1. Create a new database named `orm_quiz`

2. Copy `.env.example` to `.env`

3. Install dependencies

```
php composer.phar install
```

4. Run database migration and seeding

```
php composer.phar run-script db-setup
```

## Start local web server

```
php -S localhost:8080 -t public
```

---

## Quiz

ณ ภาควิชา Data Science and Analytics ของมหาวิทยาลัยแห่งหนึ่ง หัวหน้าภาควิชาผู้รักการวิ่งและแสนใจดีซื้อตู้เก็บของให้นักศึกษาได้ใช้เก็บหนังสือเรียน นักศึกษาแต่ละคนจะมีตู้เก็บของของตัวเองคนละ 1 ตู้และไม่มีการใช้ตู้เก็บของร่วมกัน นักศึกษาจะมีอาจารย์ที่ปรึกษาหนึ่งคนและอาจารย์หนึ่งคนสามารถเป็นที่ปรึกษาให้นักศึกษาได้หลายคน

ซอล นักวิชาการคอมพิวเตอร์ต้องทำรายงาน 3 ชุด ได้แก่ 

1. รายชื่อนักศึกษาทั้งหมดในระบบ เข้าดูได้จาก `/reports/students`
2. รายการตู้เก็บของพร้อมรหัสและชื่อต้นของนักศึกษาผู้เป็นเจ้าของ เข้าดูได้จาก `/reports/lockers`
3. รายการรหัสอาจารย์ที่ปรึกษา, ชื่ออาจารย์, นามสกุลอาจารย์ และรหัสนักศึกษาที่ตัวเองเป็นอาจารย์ที่ปรึกษา เข้าดูได้จาก `/reports/advisers`

จากตารางข้อมูล students, lockers, advisers จงเติมคำตอบในช่องว่าง (1-16) ในไฟล์ต่อไปนี้

1. app\Adviser.php
2. app\Locker.php
3. app\Student.php
4. routes\web.php

## Tables

**students**

|    id     | first_name | last_name | adviser_id |
|-----------|------------|-----------|------------|
| 612313001 | John       | Doe       | FG01       |
| 612313002 | Jane       | Doe       | FG01       |
| 612313003 | Abe        | Takakazu  | FG02       |


**lockers**

| id | student_id |
|----|------------|
| A1 | 612313001  |
| A2 | 612313002  |
| B1 | 612313003  |

**advisers**

|  id  | first_name | last_name |
|------|------------|------------
| FG01 | Parn       | Matanukum |
| FG02 | Getapong   | Somyoam   |

## References

### Eloquent ORM

* [Retrieving Models](https://laravel.com/docs/5.5/eloquent#retrieving-models)
* [Relationships](https://laravel.com/docs/5.5/eloquent-relationships)

