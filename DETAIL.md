main        → production
develop     → version under development
feature/*   → งานย่อยแต่ละฟีเจอร์
hotfix/*    → แก้บั๊กด่วนบน main
release/*   → เตรียมเวอร์ชันใหม่ (ถ้าต้องการ)

email: admin@ditto.com
password: 123456

Minimal Modern

| วิธี                             | เหมาะกับ      | ข้อดี                              | ข้อเสีย                    |
| -------------------------------- | ------------- | ---------------------------------- | -------------------------- |
| **Views อยู่ใน resources/views** | ระบบเล็ก      | ง่าย                               | รกเร็ว, แยก feature ไม่ชัด |
| **Views อยู่ใน Modules/**        | ระบบกลาง–ใหญ่ | แยก feature ชัด, รองรับ enterprise | ต้อง config เพิ่มเล็กน้อย  |
Modules/
  Users/
    Http/
    Livewire/
    Models/
    Views/

Modules/
  Inventory/
    Http/
    Livewire/
    Views/

app/
  Livewire/
    Shared/
        Table/
        Filter/
        Modal/
        SearchBox/


ผลลัพธ์ที่คุณจะได้

หน้า Asset List แสดงข้อมูล 7 รายการ

ข้อมูลถูกดึงจาก Repository (mock)

AssetService สามารถใส่ logic เพิ่ม เช่น filter

Controller ส่งข้อมูลไป View อย่างเป็นระบบ

View ใช้ Livewire แสดง Table
