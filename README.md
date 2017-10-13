# 261343-orm-quiz

## Installation

1. Create a new database named `orm_quiz`

2. Run database migration and seeding

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

1. รายชื่อนักศึกษาทั้งหมดในระบบ
2. รายการตู้เก็บของพร้อมรหัสและชื่อต้นของนักศึกษาผู้เป็นเจ้าของ 
3. รายการรหัสอาจารย์ที่ปรึกษา, ชื่ออาจารย์, นามสกุลอาจารย์ และรหัสนักศึกษาที่ตัวเองเป็นอาจารย์ที่ปรึกษา

จากตารางข้อมูล students, lockers จงเติมคำตอบในช่องว่าง (1-7) ใน [A-D]

## Tables

**students**

|    id     | first_name | last_name |
|-----------|------------|-----------|
| 612313001 | John       | Doe       |
| 612313002 | Jane       | Doe       |
| 612313003 | Abe        | Takakazu  |


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

