-- Create Database
CREATE DATABASE IF NOT EXISTS evoting;
USE evoting;

-- Admin Table
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
);

-- Insert Default Admin
INSERT INTO admin (username, password) VALUES ('admin', 'admin123');

-- Voters Table
CREATE TABLE voters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    voter_id VARCHAR(50) UNIQUE,
    password VARCHAR(50)
);

-- Candidates Table
CREATE TABLE candidates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    position VARCHAR(100),
    votes INT DEFAULT 0
);

-- Votes Table (Allow per-position voting)
CREATE TABLE votes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    voter_id VARCHAR(50),
    position VARCHAR(100),
    candidate_id INT,
    UNIQUE (voter_id, position)
);
