-- GPU
INSERT INTO products (name, price, description, image, category) VALUES
('MSI GeForce RTX 4060 Ti', 27999.00, 'Mid-range RTX GPU with 8GB GDDR6 memory and DLSS 3.', 'MSIrtx4060ti.jpg', 'GPUs'),
('Gigabyte AMD Radeon RX 7800 XT', 36999.00, 'High-performance gaming GPU with 16GB GDDR6.', 'rx7800xt.jpg', 'GPUs'),
('MSI GeForce RTX 4070 Super', 43950.00, 'Ray-tracing powerhouse with improved efficiency.', 'MSIrtx4070super.jpg', 'GPUs'),
('Radeon AMD Radeon RX 7600', 14999.00, 'Budget-friendly 1080p gaming GPU with RDNA 3 architecture.', 'Radeonrx7600.jpg', 'GPUs'),
('Intel Arc A770 16GB', 18999.00, 'Intel’s high-end GPU with AI-powered upscaling.', 'intel-arc-a770.jpg', 'GPUs');

-- CPU
INSERT INTO products (name, price, description, image, category) VALUES
('Intel Core i7-14700K', 27999.44, 'High-performance 20-core processor for gaming and productivity.', 'i7-14700k.jpg', 'CPUs'),
('AMD Ryzen 5 7600X', 18999.44, 'Efficient 6-core Ryzen CPU with AM5 platform support.', 'ryzen5-7600x.jpg', 'CPUs'),
('Intel Core i5-13600KF', 17299.44, 'Mid-range Intel CPU with no integrated graphics.', 'i5-13600kf.jpg', 'CPUs'),
('AMD Ryzen 9 7950X3D', 49999.44, 'Top-end gaming CPU with 3D V-Cache technology.', 'ryzen9-7950x3d.jpg', 'CPUs'),
('Intel Core i3-13100', 7499.44, 'Entry-level quad-core processor for budget builds.', 'i3-13100.jpg', 'CPUs');

-- RAM
INSERT INTO products (name, price, description, image, category) VALUES
('Corsair Dominator Platinum RGB 32GB (2x16GB) DDR5-6000', 16999.44, 'High-speed DDR5 RAM with RGB lighting.', 'corsair-dominator-platinum.jpg', 'RAM'),
('G.Skill Ripjaws S5 16GB (2x8GB) DDR5-5600', 8499.44, 'Reliable and fast DDR5 memory for gaming.', 'gskill-ripjaws-s5.jpg', 'RAM'),
('Kingston Fury Beast 32GB (2x16GB) DDR4-3200', 9999.44, 'Budget-friendly DDR4 memory with solid performance.', 'kingston-fury-beast.jpg', 'RAM'),
('TeamGroup T-Force Delta RGB 64GB (2x32GB) DDR4-3600', 17999.44, 'Large-capacity gaming RAM with customizable RGB.', 'teamgroup-tforce-delta.jpg', 'RAM'),
('Crucial Pro 8GB (1x8GB) DDR4-2666', 2699.44, 'Basic memory for general computing needs.', 'crucial-pro-8gb.jpg', 'RAM');

-- Storage
INSERT INTO products (name, price, description, image, category) VALUES
('Samsung 990 Pro 2TB NVMe M.2 SSD', 19999.00, 'Ultra-fast PCIe Gen 4 SSD with heatsink.', 'samsung-990pro-2tb.jpg', 'Storage'),
('WD Blue SN570 1TB NVMe SSD', 6599.44, 'Affordable NVMe storage with great reliability.', 'wd-blue-sn570-1tb.jpg', 'Storage'),
('Seagate FireCuda 530 4TB NVMe SSD', 12894.00, 'High-end gaming SSD with extreme speeds.', 'seagate-firecuda-530-4tb.jpg', 'Storage'),
('Crucial P3 Plus 500GB NVMe SSD', 3999.44, 'Entry-level PCIe Gen 4 SSD for budget builds.', 'crucial-p3plus-500gb.jpg', 'Storage'),
('Toshiba X300 6TB HDD', 8599.00, 'High-performance hard drive for desktop PCs.', 'toshiba-x300-6tb.jpg', 'Storage');

-- MB
INSERT INTO products (name, price, description, image, category) VALUES
('ASUS TUF Gaming B650-PLUS', 15999.44, 'AM5 motherboard with military-grade durability.', 'asus-tuf-b650-plus.jpg', 'Motherboard'),
('Gigabyte Z790 AORUS Elite AX', 23999.44, 'Intel 13th/14th Gen motherboard with Wi-Fi 6E.', 'gigabyte-z790-aorus-elite.jpg', 'Motherboard'),
('MSI MAG B660M Mortar WiFi', 12199.44, 'Micro-ATX Intel motherboard with solid VRMs.', 'msi-mag-b660m-mortar.jpg', 'Motherboard'),
('ASRock X670E Steel Legend', 20999.44, 'AM5 motherboard with PCIe 5.0 support.', 'asrock-x670e-steel-legend.jpg', 'Motherboard'),
('Biostar B550GTQ', 8199.44, 'Budget AMD B550 motherboard with essential features.', 'biostar-b550gtq.jpg', 'Motherboard');

-- PSU
INSERT INTO products (name, price, description, image, category) VALUES
('Seasonic Prime TX-1000 1000W 80+ Titanium', 19999.44, 'Top-tier PSU with ultra-high efficiency.', 'seasonic-prime-tx-1000.jpg', 'PSU'),
('Corsair RM850x 850W 80+ Gold', 11999.44, 'Fully modular PSU with excellent performance.', 'corsair-rm850x.jpg', 'PSU'),
('EVGA SuperNOVA 650 G6 650W 80+ Gold', 7999.44, 'Efficient and compact PSU with modular cables.', 'evga-supernova-650-g6.jpg', 'PSU'),
('Cooler Master MWE Gold 750W V2', 8999.44, 'Reliable mid-range PSU with silent fan design.', 'cooler-master-mwe-750w.jpg', 'PSU'),
('Thermaltake Smart 500W 80+ White', 4299.44, 'Budget-friendly PSU for basic builds.', 'thermaltake-smart-500w.jpg', 'PSU');