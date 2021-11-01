gitBÀI TẬP VỀ GIT
Trình bày ý nghĩa tất cả File status lifecycle trong GIT
Tạo 1 tài khoản trên https://gitlab.com/.
Tạo 1 repository trên giblab, tên repository git_tên-bạn. (VD: git_sonnt)
Sử dụng url ssh để clone repository về local (google for more information)
Tạo 4 commit trên branch master theo message commit như sau:
Init project: Thêm file readme.md (Nội dung tùy ý)
Commit 1: Thêm file file1.txt (Nội dung tùy ý)
Commit 2: Thêm file file2.txt (Nội dung tùy ý)
Commit 3: Thêm file file3.txt (Nội dung tùy ý)
Tạo 1 branch mới feature-tên_bạn (VD: feature-sonnt) từ maser (chứa 4 commit trên).
Từ branch mới feature-tên_bạn tạo 3 commit theo message commit như sau:
Commit message 1 (Thêm file commit1.txt nội dung tùy ý)
Commit message 2 (Thêm file commit2.txt nội dung tùy ý)
Commit message 3 (Thêm file commit3.txt nội dung tùy ý)
Từ branch ở yêu cầu 7, tạo 1 branch feature-tên_bạn-rebase (VD: feauture-sonnt-rebase): -> Branch này sẽ có cả 3 commit trên
Tại Branch ở yêu cầu 8,  gộp 3 commit ở yêu cầu 7 thành 1 commit duy nhất với message “Git rebase”.
 Từ branch ở yêu cầu 8, tạo 1 branch feature-tên_bạn-merge (VD: feauture-sonnt-merge): 
Tại Branch ở yêu cầu 10,  Xóa commit “Git rebase”.
 Thực hiện sửa hoàn toàn nội dung của file1.txt, file2.txt và  file3.txt
 Commit cả 3 file với message “Git conflict”
 Tại Branch ở yêu cầu 10, thực hiện merge với branch ở yêu cầu 7, sửa conflict nếu có

Phụ lục:
+ Yêu cầu 1, trả lời trực tiếp cho người hướng dẫn
+ Yêu cầu liên hệ với người hướng dẫn để add tài khoản người đó vào repo của bạn để chấm bài
+ Repo hoàn thành sẽ cần có 4 branch: master, feature-tên_bạn, feature-tên_bạn-rebase, feature-tên_bạn-merge
+ Tên branch và message commit cần theo như yêu cầu ghi ở trên.
+ Yêu cầu 8 và 14, cần mô tả các bước làm (đưa vào file answer.txt và push lên repository)

