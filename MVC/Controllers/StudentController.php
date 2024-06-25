<?php
// Kết nối tới cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dormitory_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

class StudentController
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Hiển thị danh sách sinh viên
    public function index()
    {
        $sql = "SELECT * FROM students";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }

    // Hiển thị chi tiết sinh viên
    public function show($id)
    {
        $sql = "SELECT * FROM students WHERE id=$id";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
        } else {
            echo "0 results";
        }
    }

    // Thêm sinh viên mới
    public function create($name, $email)
    {
        $sql = "INSERT INTO students (name, email) VALUES ('$name', '$email')";

        if ($this->conn->query($sql) === TRUE) {
            echo "Thêm sinh viên thành công";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $this->conn->error;
        }
    }

    // Cập nhật thông tin sinh viên
    public function update($id, $name, $email)
    {
        $sql = "UPDATE students SET name='$name', email='$email' WHERE id=$id";

        if ($this->conn->query($sql) === TRUE) {
            echo "Cập nhật sinh viên thành công";
        } else {
            echo "Lỗi: " . $this->conn->error;
        }
    }

    // Xóa sinh viên
    public function delete($id)
    {
        $sql = "DELETE FROM students WHERE id=$id";

        if ($this->conn->query($sql) === TRUE) {
            echo "Xóa sinh viên thành công";
        } else {
            echo "Lỗi: " . $this->conn->error;
        }
    }
}

// Khởi tạo đối tượng StudentController
$studentController = new StudentController($conn);

// Ví dụ gọi các phương thức
// $studentController->index();
// $studentController->show(1);
// $studentController->create('Nguyen Van A', 'nguyenvana@example.com');
// $studentController->update(1, 'Nguyen Van B', 'nguyenvanb@example.com');
// $studentController->delete(1);

// Đóng kết nối
$conn->close();
?>
