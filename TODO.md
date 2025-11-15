# TODO: Implement FAQ Backend System

## 1. Add FAQ Case to Action Files
- [x] Add 'faq' case to admin/action/tambah.php for inserting new FAQ entries.
- [x] Add 'faq' case to admin/action/ubah.php for updating existing FAQ entries.
- [x] Add 'faq' case to admin/action/hapus.php for deleting FAQ entries.

## 2. Modify Admin FAQ Page
- [x] Update admin/page/faq.php to fetch and display FAQ data dynamically from the 'faq' table.
- [x] Implement AJAX functionality for add, edit, and delete operations in the admin page.
- [x] Ensure the status checkbox controls the display on the main page.

## 3. Update Main FAQ Page
- [x] Modify page/faq.php to fetch and display only FAQs where status = 'Ditampilkan' dynamically.
- [x] Replace hardcoded FAQ items with database-driven content.

## 4. Testing and Verification
- [x] Test adding new FAQs in admin.
- [x] Test editing existing FAQs in admin.
- [x] Test deleting FAQs in admin.
- [x] Verify that only 'Ditampilkan' FAQs appear on the main page.
- [x] Check for any database query errors.
