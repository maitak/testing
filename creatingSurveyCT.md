

	1. Install Beaker theme and set as Default
	2. Install paragraphs 
	3. Install admin_toolbar
	4. Install ctools
	5. Install entity_reference_revisions
	6. Install paragraphs
	7. Install pathauto
	8. Install search_api
	9. Install token


Creating the Survey Content Type

First Step 

	1. Create Paragraph Type called Answers
		a. Add field called Response set to Text (plain ) field type  
		b. Add another field called Score Number set to Number (interger ) field type 
	2. Set Display Settings 
        a. Hide from Display the Score Number
		b. Visually Hide the Response Label
	3. Create Paragragh Type called Discoveries
        a. Add field called Discovery set type to Text (formatted,long)
	4. Set Display Settings 
		a. Visually Hide the Discovery Label
 
		
Second Step 

	1. Create Taxonomy Vocabulary called Components ( Used to group the Questions ) with the following Terms     
        a.Governance and Operating Model	
        b.Information Life Cycle Management	
        c.Inventory and data mapping	
        d.Policies	
        e.Regulatory Change	
        f.Risk and Control

Third Step 

	1. Create Content Type called Survey
		a. Add field called Question set type to Text (formatted,long)
		b. Add field called Answers set type to Paragraph and select the Answers (paragraph type)
		c. Add field called Discovery set type to Paragraph and select the Discoveries (paragraph type)
		d. Add field called Components set type to Taxonomy and select the Components from the list.
		d. Delete Body 
		
	2. Set Display Settings 
        a. Set all fields Label to Display  Above the content
		b. Hide Components field Label

	3. Set Paragraph Permissions 

       a.Enable Anonymous user to View the created Paragraphs types
 
           Answers and Discoveries

Fourth Step  
     
	1. Create View called Survey with Content Type Survey
        A. Add a Page 
       		 a. Add path called /survey 
			 b. Display format Unformatted List 
			 a. Group field with Components fields
			 a. Add Title Field (Hide from display)
			 b. Add Question Field (Enable Output this field as a custom link under Rewrite Results and put {{ title }} under Link Path)
			 a. Add Answers Field
			 b. Add Discovery Field
			 b. Add Components Field (Hide from display)
 	
		N.B Do not Display the labels
		

     

 
