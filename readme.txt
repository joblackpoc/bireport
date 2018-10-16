1. ติดตั้ง  node-v0.10.29-x64.msi (สำหรับวินโดวส์ 64 bit)
2. เปิด command line พิมพ์ดังนี้
	2.1 cd\
	2.2 node --version (เช็คเวอร์ชั่น เพื่อตรวจสอบว่า node ติดตั้งเรียบร้อยแล้ว)
	2.2 cd (path ที่เราวางโฟลเดอร์ rdcbi_report) example = cd xampp\htdocs\rdcbi_report\ แล้ว enter
	2.3 npm install แล้ว enter หมายเหตุ ต้องอยู่ใน root ของ rdcbi_report ครับ
	2.4 node app รอจนขึ้น express server listenning on port 8002
3. เปิด Google Chrome เข้าไปที่ http://localhost:8002
5.ตารางข้อมูล ชื่อ mas_person_onerecord_chronic_demo อยู่ในโฟลเดอร์ rdcbi_report
6.ไฟล์ csv สำหรับเลือก Data Source อยู่ในโฟลเดอร์ rdcbi_report ชื่อ dmhtcube.csv
4. Enjoy!! 
------------------------------------------
poc 04/08/2557 chumphon
------------------------------------------
หมายเหตุ ต้องเปิด command line ค้างไว้ด้วยเวลาใช้นะครับ