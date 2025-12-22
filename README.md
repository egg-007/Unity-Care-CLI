# 🏥 Unity Care Clinic – CLI (PHP OOP)

## 📌 Project Description

Following the development of the procedural web version of **Unity Care Clinic**, the technical team decided to build a **console-based (CLI) version** using **Object-Oriented Programming (OOP) in PHP 8**.

This CLI application is designed as an **internal tool** for fast data management without relying on the web interface.  
The project emphasizes **clean architecture**, **maintainability**, and **extensibility**.

---

## 🎯 Objectives

- Refactor business logic into **Object-Oriented PHP 8**
- Organize the project into **coherent business classes**
- Apply **encapsulation, inheritance, and interfaces**
- Implement a **MySQLi OOP data access layer**
- Create an **interactive console menu** for CRUD operations
- Generate **statistics using static methods**
- Display data in **formatted ASCII tables**

---

## 🧱 Project Architecture

### Main Classes

- **Personne** *(Parent class)*
  - Children: `Patient`, `Doctor`

- **Patient** *(extends Personne)*
- **Doctor** *(extends User)*
- **Department**
- **BaseModel** *(Parent class for all entities)*

Each class includes:
- Private properties (encapsulation)
- Getters & setters with validation
- Utility methods (e.g. `getFullName()`)
- `__toString()` method (at least one class)

---

## 🧩 BaseModel

All main entities inherit from `BaseModel`, which provides shared methods:

- `save()`
- `delete()`
- `findById()`
- `getId()`

---

## ✅ Validator (Static Class)

Centralized validation logic used inside setters:

- `Validator::isValidEmail(string $email): bool`
- `Validator::isValidPhone(string $phone): bool`
- `Validator::isValidDate(string $date): bool`
- `Validator::isNotEmpty(string $input): bool`
- `Validator::sanitize(string $input): string`

---

## 📋 Displayable Interface (Bonus)

All entities implement the `Displayable` interface for unified table display:

- `toArray(): array`
- `getDisplayHeaders(): array`

---

