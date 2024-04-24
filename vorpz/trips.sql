    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    destination VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    description TEXT,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO trips (destination, date, description) VALUES
('Париж, Франція', '2024-07-15', 'Відвідати Ейфелеву вежу та Лувр.'),
('Токіо, Японія', '2024-09-20', 'Подорож по технологічній столиці світу.'),
('Рим, Італія', '2024-10-10', 'Огляд античних памяток та італійської кухні.'),
('Маямі, Флорида', '2024-08-05', 'Відпочинок на пляжах та відвідування розважальних парків.'),
('Сідней, Австралія', '2024-11-25', 'Екскурсія до оперного театру та на Карнавальний берег.'),
('Кіпр', '2024-06-30', 'Відпочинок на пляжах Середземного моря та огляд місцевих памяток.');

COMMIT;