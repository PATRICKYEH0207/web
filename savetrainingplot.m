function stop=savetrainingplot(info)
stop=false;  
    if info.State=='done'   %check if all iterations have completed
        % if true
        currentfig=findall(groot,'Type','Figure'); 
        figuresdir_training='C:\xampp\htdocs\transfer\training-progress\';
        saveas(currentfig,strcat(figuresdir_training,'training-progress.png')) 
        %saveas(currentfig,'training-progress.png')  
    end
end