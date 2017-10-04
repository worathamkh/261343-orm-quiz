# 261343-orm-quiz

## Installation

1. Create a new database named `orm_quiz`

2. Run database migration and seeding

```
php composer.phar run-script db-setup
```

# Start local web server

```
php -S localhost:8080 -t public
```

---

ณ ภาควิชา Data Science and Analytics ของมหาวิทยาลัยแห่งหนึ่ง หัวหน้าภาควิชาผู้รักการวิ่งและแสนใจดีซื้อตู้เก็บของให้นักศึกษาได้ใช้เก็บหนังสือเรียน นักศึกษาแต่ละคนจะมีตู้เก็บของของตัวเองคนละ 1 ตู้และไม่มีการใช้ตู้เก็บของร่วมกัน

ซอล นักวิชาการคอมพิวเตอร์ต้องทำรายงาน 2 ชุด ได้แก่ 1) รายชื่อนักศึกษาทั้งหมดในระบบ และ 2) รายการตู้เก็บของพร้อมรหัสและชื่อต้นของนักศึกษาผู้เป็นเจ้าของ 

จากตารางข้อมูล students, lockers จงเติมคำตอบในช่องว่าง (1-7) ใน [A-C]

## Tables

**students**

|    id     | first_name | last_name |
|-----------|------------|-----------|
| 612313001 | John       | Doe       |
| 612313002 | Jane       | Doe       |
| 612313003 | Abe        | Takakazu  |
|    ...    |     ...    |    ...    |


**lockers**

| id | student_id |
|----|------------|
| A1 | 612313001  |
| A2 | 612313002  |
| B1 | 612313003  |
| .. |     ...    |

### Snippets

**[A] app\Models\Student.php**

```php
<?php

class Student
{
    function locker()
    {
        return $this->___1___;
    }
}
```

**[B] app\Models\Lockers.php**

```php
<?php

Class Locker
{
    function student()
    {
      return $this->___2___;
    }
}
```

**[C] routes/web.php**

```php
$router->get('/reports/students', function () {
    // FIXME
    $students = App\Models\Student::___3___;
    
    // print header
    echo "student_id,first_name,last_name<br>";

    foreach ($students as $student) {
        echo "$student->id,$student->first_name,$student->last_name<br>";
    }
});

$router->get('/reports/lockers', function () {
    // FIXME
    $lockers = App\Models\Locker::___4___;

    // print header
    echo "locker_id,student_id,student_first_name<br>";

    foreach ($lockers as $locker) {
        // FIXME
        $student = $locker->___5___;
        // FIXME
        echo "$locker->id,{$student->___6___},{$student->___7___}<br>";
    }
});
```

## References

### Eloquent relationships

1. One to one: $this->hasOne('Model')
2. One to one (inverse): $this->belongsTo('Model')
3. One to many: $this->hasMany('Model')
4. One to many (inverse): $this->belongsTo('Model')
5. Many to many: $this->belongsToMany('Model')

