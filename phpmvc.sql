-- Tabel User
CREATE TABLE IF NOT EXISTS User (
    UserID INT PRIMARY KEY AUTO_INCREMENT,
    Nama VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Role VARCHAR(50) NOT NULL
);

-- Tabel Test
CREATE TABLE IF NOT EXISTS Test (
    TestID INT PRIMARY KEY AUTO_INCREMENT,
    NamaTest VARCHAR(255) NOT NULL,
    Deskripsi TEXT,
    WaktuMulai DATETIME,
    WaktuSelesai DATETIME,
    JumlahSoal INT NOT NULL
);

-- Tabel Question
CREATE TABLE IF NOT EXISTS Question (
    QuestionID INT PRIMARY KEY AUTO_INCREMENT,
    TestID INT,
    Pertanyaan TEXT NOT NULL,
    JawabanA VARCHAR(255) NOT NULL,
    JawabanB VARCHAR(255) NOT NULL,
    JawabanC VARCHAR(255) NOT NULL,
    JawabanD VARCHAR(255) NOT NULL,
    JawabanBenar CHAR(1) NOT NULL,
    FOREIGN KEY (TestID) REFERENCES Test(TestID)
);

-- Tabel UserTest
CREATE TABLE IF NOT EXISTS UserTest (
    UserTestID INT PRIMARY KEY AUTO_INCREMENT,
    UserID INT,
    TestID INT,
    WaktuMulai DATETIME,
    WaktuSelesai DATETIME,
    Skor INT,
    FOREIGN KEY (UserID) REFERENCES User(UserID),
    FOREIGN KEY (TestID) REFERENCES Test(TestID)
);

-- Tabel Answer
CREATE TABLE IF NOT EXISTS Answer (
    AnswerID INT PRIMARY KEY AUTO_INCREMENT,
    UserTestID INT,
    QuestionID INT,
    JawabanUser CHAR(1) NOT NULL,
    FOREIGN KEY (UserTestID) REFERENCES UserTest(UserTestID),
    FOREIGN KEY (QuestionID) REFERENCES Question(QuestionID)
);
