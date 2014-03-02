//
//  GamesViewController.h
//  CordanoSports
//
//  Created by Corey Gelbaugh on 2/17/14.
//  Copyright (c) 2014 Corey Gelbaugh. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface GamesViewController : UICollectionViewController

@property (nonatomic, readwrite, weak) IBOutlet UIButton *checkInButton;
@property (nonatomic, readwrite, weak) IBOutlet UITextField *textField;

-(IBAction)go: (id)sender;

@end
