clc;clear;close;
datatable = importdata('myDiaryFile.txt');
Size=size(datatable);
for i=7:Size(1,1)-1
    New(i-6,1)=string(datatable(i,1));
    length(New(i-6,1))
end
x = 13462;
y = int2str(x)	% 將整數型態的資料轉換成字串資料
length(y)